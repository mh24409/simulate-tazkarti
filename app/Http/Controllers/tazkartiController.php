<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\staduim;
use auth;
use App\match;
use app\user;
use App\event;
use App\theater;
use App\eventticket;
use App\matchticket;
use DB;


use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;

class tazkartiController extends Controller
{
    public function tazkarti()
    {
        return View('tazkarti');
    }
    public function storestaduim(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'address' => 'required|max:200',
            'chairsno' => 'required',
            'firstrightno' => 'required',
            'firstleftno' => 'required',
            'secondrightno' => 'required',
            'secondleftno' => 'required',
            'thirdrightno' => 'required',
            'thirdleftno' => 'required',
            'vipno' => 'required',
            'vvipno' => 'required',
        ]);

        //         $x = $request->firstrightno + $request->firstleftno + $request->secondrightno + $request->secondleftno + $request->thirdrightno + $request->thirdleftno + $request->vipno + $request->vvipno;
        // $y = $request->chairsno  ;


        $staduim = new staduim();
        $staduim->name = $request->name;
        $staduim->address = $request->address;
        $staduim->noOfChairs = $request->chairsno;
        $staduim->noOffirstRight = $request->firstrightno;
        $staduim->noOffirstLeft = $request->firstleftno;
        $staduim->noOfSecondRight = $request->secondrightno;
        $staduim->noOfsecondLeft = $request->secondleftno;
        $staduim->noOfThirdRight = $request->thirdrightno;
        $staduim->noOfthirdLeft = $request->thirdleftno;
        $staduim->vip = $request->vipno;
        $staduim->vvip = $request->vvipno;
        $staduim->save();

        return  Redirect('/dashallstaduims')->with('status', 'staduim added succesfuly to tazkarti');
    }
    public function index()
    {
        $events = DB::table('events')->where('status', '1')->join('theaters', 'theaters.id', '=', 'events.theaterid')->take(1)->get();

        $matches = DB::table('matches')->where('status', '1')->join('staduims', 'staduims.id', '=', 'matches.staduimId')->take(1)->get();

        $matchetickets = DB::table('matchtickets')->join('matches', 'matches.id', '=', 'matchtickets.matchId')->join('users', 'users.id', '=', 'matchtickets.userId')->where('users.id', '=', Auth::user()->id)->take(2)->get();
        $eventticket = DB::table('eventtickets')->join('events', 'events.id', '=', 'eventtickets.eventId')->join('users', 'users.id', '=', 'eventtickets.userId')->where('users.id', '=', Auth::user()->id)->take(2)->get();

        return View('index', compact('events', 'matches', 'matchetickets', 'eventticket'));
    }
    public function allevents()
    {
        $events = DB::table('events')->where('status', '1')->join('theaters', 'theaters.id', '=', 'events.theaterid')->get();

        return View('allevents', compact('events'));
    }
    public function allmatches()
    {
        $matches = DB::table('matches')->where('status', '1')->join('staduims', 'staduims.id', '=', 'matches.staduimId')->get();

        return View('allmatches', compact('matches'));
    }
    public function mytickets()
    {
        $matchetickets = DB::table('matchtickets')->join('matches', 'matches.id', '=', 'matchtickets.matchId')->join('users', 'users.id', '=', 'matchtickets.userId')->where('users.id', '=', Auth::user()->id)->get();
        $eventticket = DB::table('eventtickets')->join('events', 'events.id', '=', 'eventtickets.eventId')->join('users', 'users.id', '=', 'eventtickets.userId')->where('users.id', '=', Auth::user()->id)->get();

        return View('mytickets', compact('matchetickets', 'eventticket'));
    }
    public function dashboard()
    {
        $userscount = DB::table('users')->count();
        $matchescount = DB::table('matches')->count();
        $eventscount = DB::table('events')->count();
        $staduimscount = DB::table('staduims')->count();
        $theaterscount = DB::table('theaters')->count();

        $users = DB::table('users')->take(10)->get();
        $staduims = DB::table('staduims')->take(6)->get();
        $theaters = DB::table('theaters')->take(6)->get();

        return View('dashboard.index', compact('userscount', 'matchescount', 'eventscount', 'staduimscount', 'theaterscount', 'users', 'staduims', 'theaters'));
    }
    public function dashallusers()
    {
        $users = DB::table('users')->paginate(8);
        return view('dashboard.allUsers', compact('users'));
    }
    public function dashallevents()
    {
        $events = DB::table('events')->paginate(8);
        return view('dashboard.allEvents', compact('events'));
    }
    public function dashallMatches()
    {
        $matches = DB::table('matches')->paginate(8);
        return view('dashboard.allMatches', compact('matches'));
    }
    public function dashallstaduims()
    {
        $staduims = DB::table('staduims')->paginate(8);
        return view('dashboard.allstaduims', compact('staduims'));
    }

    public function dashalltheater()
    {
        $theaters = DB::table('theaters')->paginate(8);
        return view('dashboard.alltheater', compact('theaters'));
    }
    public function addstaduims()
    {
        return View('dashboard.addstaduims');
    }
    public function addtheater()
    {
        return View('dashboard.addtheater');
    }
    public function addmatch()
    {
        $staduims = DB::table('staduims')->get();
        return View('dashboard.addmatch', compact('staduims'));
    }
    public function storematch(Request $request)
    {
        $request->validate([
            'hometeam' => 'required|max:50',
            'awayteam' => 'required|max:200',
            'chairsno' => 'required',
            'hometeamlogo' => 'image|mimes:jpg,png,jpeg|max:1999',
            'awayteamlogo' => 'image|mimes:jpg,png,jpeg|max:1999',
            'groupstage' => 'required',
            'staduimid' => 'required',
            'time' => 'required',
            'date' => 'required',
            'opentime' => 'required',
            'closetime' => 'required',
            'firstrightno' => 'required',
            'firstleftno' => 'required',
            'secondrightno' => 'required',
            'secondleftno' => 'required',
            'thirdrightno' => 'required',
            'thirdleftno' => 'required',
            'vipno' => 'required',
            'vvipno' => 'required',
            'firstprice' => 'required',
            'secondprice' => 'required',
            'thirdprice' => 'required',
            'vipprice' => 'required',
            'vvipprice' => 'required'
        ]);
        $request->hasFile('hometeamlogo');
        $hometeamlogofile = $request->file('hometeamlogo');
        $exe = $hometeamlogofile->getClientOriginalExtension();
        $hometeamlogoname =   $request->hometeam . '.' . $exe;
        $hometeamlogofile->storeAs('public/images/matches', $hometeamlogoname);

        $request->hasFile('awayteamlogo');
        $awayteamlogofile = $request->file('awayteamlogo');
        $exe = $awayteamlogofile->getClientOriginalExtension();
        $awayteamlogoname =   $request->awayteam . '.' . $exe;
        $awayteamlogofile->storeAs('public/images/matches', $awayteamlogoname);



        $match = new match();
        $match->homeTeam = $request->hometeam;
        $match->awayTeam = $request->awayteam;
        $match->hometeamlogo = $hometeamlogoname;
        $match->awayteamlogo = $awayteamlogoname;
        $match->noOfFanse = $request->chairsno;
        $match->avilabletickets = $request->chairsno;
        $match->time = $request->time;
        $match->date = $request->date;
        $match->noOffirstRight = $request->firstrightno;
        $match->noOfSecondRight = $request->secondrightno;
        $match->noOfThirdRight = $request->thirdrightno;
        $match->noOffirstLeft = $request->firstleftno;
        $match->noOfsecondLeft = $request->secondleftno;
        $match->noOfthirdLeft = $request->thirdleftno;
        $match->vip = $request->vipno;
        $match->vvip = $request->vvipno;
        $match->Firstprice = $request->firstprice;
        $match->secondprice = $request->secondprice;
        $match->thirdprice = $request->thirdprice;
        $match->vipprice = $request->vipprice;
        $match->vvipprice = $request->vvipprice;
        $match->openTime = $request->opentime;
        $match->closeTime = $request->closetime;
        $match->groupstage = $request->groupstage;
        $match->staduimId = $request->staduimid;

        $match->save();

        return  Redirect('/dashallmatches')->with('status', 'match added succesfuly to tazkarti');
    }
    public function addevent()
    {

        $theaters =  DB::table('theaters')->get();
        return view('dashboard.addevent', compact('theaters'));
    }
    public function storeevent(Request $request)
    {
        $request->validate([
            'type' => 'required|max:50',
            'Disc' => 'required|max:200',
            'date' => 'required',
            'eventimage' => 'image|mimes:jpg,png,jpeg|max:1999',
            'time' => 'required',
            'opentime' => 'required',
            'closetime' => 'required',
            'firstprice' => 'required',
            'Theaterid' => 'required',
            'secondprice' => 'required',
            'thirdprice' => 'required',
            'vipprice' => 'required',
            'vvipprice' => 'required',
            'ticketsno' => 'required'

        ]);
        $request->hasFile('eventimage');
        $eventimagefile = $request->file('eventimage');
        $exe = $eventimagefile->getClientOriginalExtension();
        $eventimagename =   $request->type . '.' . $exe;
        $eventimagefile->storeAs('public/images/events', $eventimagename);
        $event = new event();
        $event->date = $request->date;
        $event->time = $request->time;
        $event->type = $request->type;
        $event->disc = $request->Disc;
        $event->theaterId = $request->Theaterid;
        $event->priceoffirst = $request->firstprice;
        $event->priceofsecond = $request->secondprice;
        $event->priceofthird = $request->thirdprice;
        $event->priceofvip = $request->vipprice;
        $event->priceofvvip = $request->vvipprice;
        $event->opentime = $request->opentime;
        $event->closetime = $request->closetime;
        $event->eventimage = $eventimagename;
        $event->avilabletickets = $request->ticketsno;
        $event->nooftickets = $request->ticketsno;
        $event->save();
        return  Redirect('/dashallEvents')->with('status', 'event added succesfuly to tazkarti');
    }
    public function storeeventticket(Request $request)
    {
        if (Auth::user()->status == 0) {
            return  view('/notactiveuser');
        }
       $nooftickets = DB::table('events')->where('id', $request->eventid)->first()->{'avilabletickets'};

        if ($nooftickets==0) {
            return  Redirect('/index')->with('wrong', 'Sorry,tickets are over');
        } else {

            $request->validate([

                'position' => 'required',

            ]);

            $event = new eventticket();

            $event->position = $request->position;
            $event->eventId = $request->eventid;
            $event->userId = $request->userid;
            $event->save();

            DB::table('events')
                ->where('id', $event->eventId)->decrement('avilabletickets', 1);
            return  Redirect('/index')->with('status', 'event booked succesfuly');
        }
    }
    public function storematchticket(Request $request)
    {


        $nooftickets = DB::table('matches')->where('id', $request->matchid)->first()->{'avilabletickets'};
       
        if (Auth::user()->status == 0) {
            return  view('/notactiveuser');
        }

        if ($nooftickets==0) {
            return  Redirect('/index')->with('wrong', 'Sorry,tickets are over');
        } else {
            $request->validate([

                'position' => 'required',

            ]);


            $match = new matchticket();
            $match->degree = $request->position;
            $match->matchId = $request->matchid;
            $match->userId = $request->userid;
            $match->save();

            DB::table('matches')
                ->where('id', $match->matchId)->decrement('avilabletickets', 1);
            return  Redirect('/index')->with('status', 'match booked succesfuly');
        }
        
       
    }

    public function storetheater(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'address' => 'required|max:200',
            'chairsno' => 'required',
            'firstno' => 'required',
            'secondno' => 'required',
            'thirdno' => 'required',
            'vipno' => 'required',
            'vvipno' => 'required',


        ]);
        $theater = new theater();
        $theater->name = $request->name;
        $theater->nooffirst = $request->firstno;
        $theater->noofsecond = $request->secondno;
        $theater->noofthird = $request->thirdno;
        $theater->noofvip = $request->vipno;
        $theater->noofvvip = $request->vvipno;
        $theater->address = $request->address;
        $theater->chairsno = $request->chairsno;

        $theater->save();
        return  Redirect('/dashallEvents')->with('status', 'theater added succesfuly to tazkarti');
    }
    public function myprofile($id)
    {
        $user = DB::table('users')->where('id', '=', $id)->get();

        return view('myprofile', compact('user'));
    }
    public function userprofile($id)
    {
        $user = DB::table('users')->where('id', '=', $id)->get();

        return view('dashboard.userprofile', compact('user'));
    }
    public function updatematch($id, $status)
    {
        $match = DB::table('matches')
            ->where('id', $id)
            ->update(['status' => $status]);;

        return redirect('/dashallmatches');
    }
    public function updateevent($id, $status)
    {
        $event = DB::table('events')
            ->where('id', $id)
            ->update(['status' => $status]);
        return redirect('/dashallEvents');
    }
    public function updateuser($id, $status)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->update(['status' => $status]);
        return redirect('/dashallusers');
    }
    public function updateinformation()
    {
        return view('updateinformation');
    }
    public function updateinfo(Request $request)
    {
        $request->validate([

            'code' => 'required',
            'newdata' => 'required',

        ]);

        if ($request->code == 'Xcv0h6') {
            $user = DB::table('users')
                ->where('id', $request->userid)->update(['fisrtname' => $request->newdata]);
        }
        if ($request->code == 'Qwe5r6') {
            $user = DB::table('users')
                ->where('id', $request->userid)->update(['secondname' => $request->newdata]);
        }
        if ($request->code == 'As2d0') {
            $user = DB::table('users')
                ->where('id', $request->userid)->update(['thirdname' => $request->newdata]);
        }
        if ($request->code == 'Fg3h7') {
            $user = DB::table('users')
                ->where('id', $request->userid)->update(['momname' => $request->newdata]);
        }
        if ($request->code == 'Vb66n') {
            $user = DB::table('users')
                ->where('id', $request->userid)->update(['national' => $request->newdata]);
        }
        if ($request->code == 'Jk5l6') {
            $user = DB::table('users')
                ->where('id', $request->userid)->update(['nationalid' => $request->newdata]);
        }
        if ($request->code == 'Iu5p6') {
            $user = DB::table('users')
                ->where('id', $request->userid)->update(['mobile' => $request->newdata]);
        }
        if ($request->code == 'K5ly9') {
            $user = DB::table('users')
                ->where('id', $request->userid)->update(['email' => $request->newdata]);
        }

        if ($request->code == 'namecode') {
            $nationalimageName = time() . '.' . $request->nationalimage->getClientOriginalExtension();

            $request->nationalimage->move(
                base_path() . '/public/storage/images/users',
                $nationalimageName
            );
            $user = DB::table('users')
                ->where('id', $request->userid)->update(['nationalimage' => $request->nationalimageName]);
        }
        if ($request->code == 'namecode') {
            $personalimageName = time() . '.' . $request->personalimage->getClientOriginalExtension();

            $request->personalimage->move(base_path() . '/public/storage/images/users', $personalimageName);
            $user = DB::table('users')
                ->where('id', $request->userid)->update(['personalimage' => $personalimageName]);
        }





        return redirect('/index');
    }
}
