@extends('layouts.app2')

@section('content')




<section class="container-fluid" style="background-color: #EEEEEE; height: 1000px; padding-top: 30px;">
    <div class="container" style="padding-bottom: 25px; padding-top: 50px;    ">
        <label for="" style="font-weight: bold; font-size: 30px;"> Matches</label>
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
    @foreach ($events as $event)
    <section style="padding: 0px; margin-top: 5px; margin-bottom: 50px">
        <div class="container text-right clearfix" style="background-color: white;padding: 0px;">
            <img style="height: 100px;float: right; margin-left: 20px;"
                src="{{asset("storage/images/events/$event->eventimage")}}" alt="">

            <div style="padding-top: 20px;">

                <label class="text-muted"> {{$event->type}} </label>
                <br>
                <label style="font-size: 20px; font-weight: bold;"> {{$event->disc}}</label>

            </div>

        </div>
        <div class="container text-right clearfix" style="background-color: white;margin-top: 5px;">
            <div class="row" style="padding: 20px;">
                <div class="col">
                    <label> {{$event->date}} </label><br>
                    <label> {{$event->time}} </label><br>

                </div>
                <div class="col">
                    <label> {{$event->name}}</label><br>
                    <label class="text-muted">{{$event->address}} </label>

                </div>

            </div>

        </div>
        <!-- event Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/storeeventticket">
                            @csrf

                            <input type="hidden" name="eventid" value="{{$event->id}}">
                            <input type="hidden" name="userid" value="{{Auth::user()->id}}">
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-4 pt-0">اختر الدرجه المفضله</legend>
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="position"
                                                id="gridRadios1" value="first" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                FIRST -{{$event->priceoffirst}}$
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="position"
                                                id="gridRadios2" value="second">
                                            <label class="form-check-label" for="gridRadios2">
                                                SECOND -{{$event->priceofsecond}}$
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="position"
                                                id="gridRadios3" value="third">
                                            <label class="form-check-label" for="gridRadios3">
                                                THIRD -{{$event->priceofthird}}$
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="position"
                                                id="gridRadios3" value="vip">
                                            <label class="form-check-label" for="gridRadios3">
                                                VIP -{{$event->priceofvip}}$
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="position"
                                                id="gridRadios3" value="vvip">
                                            <label class="form-check-label" for="gridRadios3">
                                                VVIP -{{$event->priceofvip}}$
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">حجز</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="container text-right clearfix"
            style="background-color: white;margin-top: 5px;padding-bottom: 30px;">
            <p style="padding-top: 20px;" class="text-muted">{{$event->disc}}</p>
            <div class="row text-center">
                <div class="col">

                    @if ($event->nooftickets>0)
                    <img style="width: 20px" src="{{asset('storage/images/active.svg')}}" alt=""> متاح
                    @else
                    <img style="width: 20px" src="{{asset('storage/images/delete.svg')}}" alt=""> نفذت التذاكر
                    @endif
                </div>
                <div class="col">
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">حجز
                        تذكره</button>
                </div>

            </div>

        </div>



    </section>
    @endforeach



</section>

@endsection