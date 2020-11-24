@extends('layouts.app4')

@section('content')



<div class="container" style="overflow: hidden">

    <div class=" d-flex justify-content-center " style="margin-bottom: 20px;">
        <h1 style="color: #219F45;"> Add New Events <i class="fas fa-hand-point-down" style="font-size: 30px; "></i>
        </h1>
    </div>

    <div class=" d-flex justify-content-center ">
        <div class="col-md-8">
            <form method="POST" action="/storeevent" enctype="multipart/form-data">
              @csrf
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style=" float: left;">
                        <label for="type" class="col-sm-3 col-form-label">Type</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="type" name="type">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="float: right;">
                        <label for="Disc" class="col-sm-3 col-form-label">Discription</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Disc" name="Disc">
                        </div>
                    </div>

                </section>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style=" float: left;">
                        <label for="date" class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" name="date">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="float: right;">
                        <label for="time" class="col-sm-3 col-form-label">Time</label>
                        <div class="col-sm-9">
                            <input type="time" class="form-control" id="time"  name="time">
                        </div>
                    </div>

                </section>



                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="opentime" class="col-sm-3 col-form-label">Open Time</label>
                        <div class="col-sm-9">
                            <input type="time" class="form-control" id="opentime" name="opentime">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="closetime" class="col-sm-3 col-form-label">Close Time</label>
                        <div class="col-sm-9">
                            <input type="time" class="form-control" id="closetime" name="closetime">
                        </div>
                    </div>

                </section>
                
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="ticketsno" class="col-sm-3 col-form-label">Tickets No</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="ticketsno" name="ticketsno">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        
                    </div>

                </section>

                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="firstprice" class="col-sm-3 col-form-label">1st price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="firstprice" name="firstprice">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="Theater" class="col-sm-3 col-form-label">Theater</label>
                        <div class="col-sm-9">
                            <select name="Theaterid" class="custom-select mr-sm-2" id="Theater">
                                <option selected>Choose...</option>
                                @foreach ($theaters as $theater)
                                <option value="{{$theater->id}}">{{$theater->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </section>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">

                    <div class="form-group row col-5  " style="display: inline-block;">
                        <label for="secondprice" class="col-sm-3 col-form-label">2nd price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="secondprice" name="secondprice">
                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="thirdprice" class="col-sm-3 col-form-label">3th price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="thirdprice" name="thirdprice">
                        </div>
                    </div>

                </section>

                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="vipprice" class="col-sm-3 col-form-label">vip price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="vipprice" name="vipprice">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="vvipprice" class="col-sm-3 col-form-label">vvip price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="vvipprice" name="vvipprice">
                        </div>
                    </div>


                </section>
                <section class="row d-flex justify-content-center" style="padding-top: 10px;">
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="eventimage" class="col-sm-3 col-form-label">Event Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="eventimage" name="eventimage">

                        </div>
                    </div>
                </section>




                <div class="form-group row d-flex justify-content-center " style="margin-top: 50px;">

                    <div class="col-sm-10 ">
                        <button name="addeventbtn" style="background-color: #219F45; color: white;" type="submit"
                            class="btn  btn-block">ADD</button>
                    </div>
                </div>
            </form>
        </div>
    </div>





</div>

@endsection