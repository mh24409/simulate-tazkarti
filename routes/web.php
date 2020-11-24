<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Notification;
use App\Notifications\codeforupdate ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

     // send notifiaction to multi users


      //  $user = App\User::first();
      //  $user->notify(new App\Notifications\ses());

       
    //    Notification::send($user, new  codeforupdate($code));



    // view all notifiactions

    // $user = Auth::user();
    // foreach ($user->Notifications as $not) {
    //     var_dump($not->type);
    // }



    // view readed notifications
    
    // $user = Auth::user();
    // foreach ($user->readNotifications as $not) {
    //     var_dump($not->type);
    // }


    // view unreaded notifications

    // $user = Auth::user();
    // foreach ($user->Notifications as $not) {
    //     var_dump($not->data['hometeam']);
    // }
    // readed notifications

    // $user = Auth::user();
    // foreach ($user->unreadNotifications as $not) {
    //     $not->markAsRead();
    // }

    // delete notifiaction
    // $user->Notifications->delete();
    return View('tazkarti');


});



Route::get('/sendnoti/{id}/{code}',function($id,$code){

  $user = App\User::where('id',$id)->first();
  $user->notify(new App\Notifications\ses($code));
  return redirect()->route('dashallusers');
})->name('sendnoti');

Route::get('/readnoti',function(){

     $user = Auth::user();
     foreach ($user->unreadNotifications as $not) {
         $not->markAsRead();
     }
  return back();
})->name('readnoti');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tazkarti', 'tazkartiController@tazkarti')->name('tazkarti');
Route::get('/index', 'tazkartiController@index')->name('index')->middleware('auth');
Route::get('/allevents', 'tazkartiController@allevents')->name('allevents')->middleware('auth');
Route::get('/allmatches', 'tazkartiController@allmatches')->name('allmatches')->middleware('auth');
Route::get('/mytickets', 'tazkartiController@mytickets')->name('mytickets')->middleware('auth');
Route::get('/dashboard', 'tazkartiController@dashboard')->name('dashboard')->middleware('auth');

Route::get('/dashallmatches', 'tazkartiController@dashallMatches')->name('dashallMatches')->middleware('auth');

Route::get('/dashallEvents', 'tazkartiController@dashallEvents')->name('dashallEvents')->middleware('auth');
Route::get('/dashallusers', 'tazkartiController@dashallusers')->name('dashallusers')->middleware('auth');
Route::get('/dashallstaduims', 'tazkartiController@dashallstaduims')->name('dashallstaduims')->middleware('auth');
Route::get('/dashalltheater', 'tazkartiController@dashalltheater')->name('dashalltheater')->middleware('auth');

Route::get('/addstaduims', 'tazkartiController@addstaduims')->name('addstaduims')->middleware('auth');
Route::get('/addtheater', 'tazkartiController@addtheater')->name('addtheater')->middleware('auth');
Route::get('/addmatch', 'tazkartiController@addmatch')->name('addmatch')->middleware('auth');
Route::get('/addevent', 'tazkartiController@addevent')->name('addevent')->middleware('auth');
Route::post('/storematch', 'tazkartiController@storematch')->name('storematch')->middleware('auth');
Route::post('/storestaduim', 'tazkartiController@storestaduim')->name('storestaduim')->middleware('auth');
Route::post('/storeevent', 'tazkartiController@storeevent')->name('storeevent')->middleware('auth');
Route::post('/storeeventticket', 'tazkartiController@storeeventticket')->name('storeeventticket')->middleware('auth');
Route::post('/storematchticket', 'tazkartiController@storematchticket')->name('storematchticket')->middleware('auth');

Route::post('/storetheater', 'tazkartiController@storetheater')->name('storetheater')->middleware('auth');

Route::get('/myprofile/{id}', 'tazkartiController@myprofile')->name('myprofile')->middleware('auth');
Route::get('/userprofile/{id}', 'tazkartiController@userprofile')->name('userprofile')->middleware('auth');

Route::get('/updatematch/{id}/{status}', 'tazkartiController@updatematch')->name('updatematch')->middleware('auth');
Route::get('/updateuser/{id}/{status}', 'tazkartiController@updateuser')->name('updateuser')->middleware('auth');

Route::get('/updateevent/{id}/{status}', 'tazkartiController@updateevent')->name('updateevent')->middleware('auth');
Route::get('/updateinformation', 'tazkartiController@updateinformation')->name('updateinformation')->middleware('auth');

Route::post('/updateinfo', 'tazkartiController@updateinfo')->name('updateinfo')->middleware('auth');
