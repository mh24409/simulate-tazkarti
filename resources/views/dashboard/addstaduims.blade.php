@extends('layouts.app4')

@section('content')



<div class="container">

    <div class=" d-flex justify-content-center " style="margin-bottom: 50px;">
        <h1 style="color: #219F45;"> Add New Staduim <i class="fas fa-hand-point-down" style="font-size: 30px; "></i>
        </h1>
    </div>

    <div class=" d-flex justify-content-center ">
        <div class="col-md-8">
            <form method="POST" action="/storestaduim">

                @csrf

                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style=" float: left;">
                        <label for="name" class="col-sm-3 col-form-label">name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="float: right;">
                        <label for="address" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                    </div>

                </section>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style=" float: left;">
                        <label for="chairsno" class="col-sm-3 col-form-label">chairs number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="chairsno" name="chairsno">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="float: right;">
                        <label for="firstrightno" class="col-sm-3 col-form-label">1st right no</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="firstrightno" name="firstrightno">
                        </div>
                    </div>

                </section>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5" style="display: inline-block;">
                        <label for="firstleftno" class="col-sm-3 col-form-label">1st left no</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="firstleftno" name="firstleftno">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="secondrightno" class="col-sm-3 col-form-label">2nd right no</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="secondrightno" name="secondrightno">
                        </div>
                    </div>

                </section>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="secondleftno" class="col-sm-3 col-form-label">2nd left no</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="secondleftno" name="secondleftno">

                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="thirdrightno" class="col-sm-3 col-form-label">3rd tight no</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="thirdrightno" name="thirdrightno">
                        </div>
                    </div>

                </section>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">

                    <div class="form-group row col-5  " style="display: inline-block;">
                        <label for="thirdleftno" class="col-sm-3 col-form-label">3rd left no</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="thirdleftno" name="thirdleftno">
                        </div>
                    </div>
                    <div class="form-group row col-5 " style="display: inline-block;">
                        <label for="vipno" class="col-sm-3 col-form-label">vip no</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="vipno" name="vipno">
                        </div>
                    </div>

                </section>
                <section class="row d-flex justify-content-between" style="padding-top: 10px;">

                    <div class="form-group row col-5  " style="display: inline-block;">
                        <label for="vvipno" class="col-sm-3 col-form-label">vvip no</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="vvipno" name="vvipno">
                        </div>
                    </div>


                </section>


                <div class="form-group row d-flex justify-content-center " style="margin-top: 50px;">

                    <div class="col-sm-10 ">
                        <button name="addstaduimbtn" style="background-color: #219F45; color: white;" type="submit"
                            class="btn  btn-block">ADD</button>
                    </div>
                </div>
            </form>
        </div>
    </div>





</div>
@endsection