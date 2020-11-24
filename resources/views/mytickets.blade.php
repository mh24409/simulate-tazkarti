@extends('layouts.app2')

@section('content')




<section class="container-fluid" style="background-color: #EEEEEE;padding-top: 30px;">
   
    <div>
        <div class="container" style="padding-bottom: 25px; padding-top: 50px;    ">
            <label for="" style="font-weight: bold; font-size: 30px;"> All My Tickets</label>
            <div style="float: right;">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" style="width: 300px;" type="search" placeholder="Search"
                        aria-label="Search">
                    <input class="form-control mr-sm-2" style="width: 300px;" type="search" placeholder="Search"
                        aria-label="Search">

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div style="background-color: white; margin-bottom: 5px ; height: 70px;padding-top: 20px" class="row">
            <div class="col" style="display: inline-block"> show</div>
            <div class="col text-center" style="display: inline-block"> name</div>
            <div class="col text-center" style="display: inline-block"> status</div>
        </div>
        @foreach ($matchetickets as $ticket)
        <div style="background-color: white; margin-bottom: 5px ; height: 60px;overflow: hidden;" class="row">
            <div style="margin-left: 10px"><img style="width: 20px" src="{{asset('storage/images/deleviered.svg')}}"
                    alt=""></div>

            <div class="col" style="display: inline-block"> <label style="font-weight: bold; margin-bottom: 2px;">
                    {{$ticket->homeTeam}} vs {{$ticket->awayTeam}}</label><br> <label
                    style="font-size: 10px; letter-spacing: 5px;">{{$ticket->date}} {{$ticket->time}}</label></div>
            <div class="col text-center" style="display: inline-block;padding-top: 20px"> {{$ticket->fisrtname}}
                {{$ticket->thirdtname}}</div>
            <div class="col text-center" style="display: inline-block ;padding-top: 20px"> deleivered</div>
        </div>
        @endforeach
        @foreach ($eventticket as $ticket)
        <div style="background-color: white; margin-bottom: 5px ; height: 60px;overflow: hidden;" class="row">
            <div style="margin-left: 10px"><img style="width: 20px" src="{{asset('storage/images/deleviered.svg')}}"
                    alt=""></div>

            <div class="col" style="display: inline-block"> <label style="font-weight: bold; margin-bottom: 2px;">
                    {{$ticket->disc}}</label><br> <label
                    style="font-size: 10px; letter-spacing: 5px;">{{$ticket->date}} {{$ticket->time}}</label></div>
            <div class="col text-center" style="display: inline-block; padding-top: 20px"> {{$ticket->fisrtname}}
                {{$ticket->thirdtname}}</div>
            <div class="col text-center" style="display: inline-block ; padding-top: 20px"> deleivered</div>
        </div>
        @endforeach



    </div>
</section>

@endsection