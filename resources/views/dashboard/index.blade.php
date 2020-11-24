@extends('layouts.app4')

@section('content')




<div class="container   " style="overflow: hidden;color: white;color: black">

    <div class="row d-flex justify-content-center " style="margin-top: 30px">

        <div class="carddiv col-md-2 col-sm-4 text-center  ">
            <span class=""><i class="fas fa-users" style="font-size: 15px;"></i> Users</span>
            <div class="" style="font-size: 30px;">{{$userscount}}</div>
            <span class=""> <a class="btn btn-outline-success btn-sm" href="/dashallusers">More</a>

        </div>
        <div class=" col-md-2 col-sm-4 carddiv text-center">
            <span class=" "><i class="fas fa-users" style="font-size: 15px;"></i> Matches</span>
            <div class="" style="font-size: 30px;">{{$matchescount}}</div>
            <span class=""> <a class="btn btn-outline-success btn-sm " href="/dashallmatches">More</a>
            </span>
        </div>
        <div class=" col-md-2 col-sm-4  carddiv text-center">
            <span class=" "><i class="fas fa-users" style="font-size: 15px;"></i> Events</span>
            <div class="" style="font-size: 30px;">{{$eventscount}}</div>
            <span class=" "> <a class="btn btn-outline-success btn-sm" href="/dashallEvents">More</a>
            </span>
        </div>
        <div class=" col-md-2 col-sm-4 carddiv text-center ">
            <span class=" "><i class="fas fa-users" style="font-size: 15px;"></i>Stediums</span>
            <div class="" style="font-size: 30px;">{{$staduimscount}}</div>
            <span class=""> <a class="btn btn-outline-success btn-sm" href="/dashallstaduims">More</a>
            </span>
        </div>
        <div class=" col-md-2 col-sm-4 text-center  lastlast" >
            <span><i class="fas fa-users" style="font-size: 15px;"></i>Theater</span>
            <div class="" style="font-size: 30px;">{{$theaterscount}}</div>
            <span class=""> <a class="btn btn-outline-success btn-sm" href="/dashalltheater">More</a>
            </span>
        </div>

    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col-md-4">
            <div style="margin: 1px;">
                <div class="row" style="border-bottom: 1px solid black;">
                    <h2 class="col"> Users</h2>
                    <div class="col text-right">
                        <a type="button" class="btn btn-outline-success btn-sm  " href="/dashallusers"> <i class="fas fa-users "
                                style="font-size: 15px; margin-top: 5px;"></i> more</a>
                    </div>

                </div>
                <div class="x_content">
                    <?php $i=1 ?>
                    @foreach ($users as $user)
                    <article class="media event ">
                        <a class="text-center"
                            style="background-color: unset; border: solid 1px #0463CE; width: 50px; border-radius: 20px; height: 30px;padding-top: 5px; margin-right: 15px;margin-top: 5px;">
                            <?= $i?>
                        </a>
                        <div class="media-body">
                            <a style="color: black" href="#">{{$user->fisrtname}} {{$user->thirdtname}}</a>
                            <p style="color: gray">{{$user->email}}</p>
                        </div>
                    </article>
                    <?php $i++ ?>
                    @endforeach



                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div style="margin: 1px;">
                <div class="row" style="border-bottom: 1px solid black;">
                    <h2 class="col"> staduims</h2>
                    <div class="col text-right">
                        <a type="button" class="btn btn-outline-success btn-sm  " href="/dashallstaduims"> <i class="fas fa-users "
                                style="font-size: 15px; margin-top: 5px;"></i> more</a>
                    </div>

                </div>
                <div class="x_content">
                    <?php $i=1 ?>
                    @foreach ($staduims as $staduim)
                    <article class="media event ">
                        <a class="text-center"
                            style="background-color: unset; border: solid 1px #0463CE; width: 50px; border-radius: 20px; height: 30px;padding-top: 5px; margin-right: 15px;margin-top: 5px;">
                            <?= $i?>
                        </a>
                        <div class="media-body">
                            <p style="color: black">{{$staduim->name}} </p>
                            <p style="color: gray">{{$staduim->address}} </p>
                        </div>
                    </article>
                    <?php $i++ ?>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div style="margin: 1px;">
                <div class="row" style="border-bottom: 1px solid black;">
                    <h2 class="col"> Users</h2>
                    <div class="col text-right">
                        <a type="button" class="btn btn-outline-success btn-sm " href="/dashallusers"> <i class="fas fa-users "
                                style="font-size: 15px; margin-top: 5px;"></i> more</a>
                    </div>

                </div>
                <div class="x_content">
                    <?php $i=1 ?>
                    @foreach ($theaters as $theater)
                    <article class="media event ">
                        <a class="text-center"
                            style="background-color: unset; border: solid 1px #0463CE; width: 50px; border-radius: 20px; height: 30px;padding-top: 5px; margin-right: 15px;margin-top: 5px;">
                            <?= $i?>
                        </a>
                        <div class="media-body">
                            <p style="color: black">{{$theater->name}} </p>
                            <p style="color: gray">{{$theater->address}} </p>
                        </div>
                    </article>
                    <?php $i++ ?>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-3 " style="padding-top: 49px; padding-bottom: 30px;">
            <div class="col-12 text-center" > <a class="btn btn-outline-success" href="/addstaduims"> لاضافه استاد لموقع تذكرتي </a> </div>
        </div>
        <div class="col-md-3 " style="padding-top: 49px; padding-bottom: 30px;">
            <div class="col-12 text-center"> <a class="btn btn-outline-success" href="/addtheater"> لاضافه مسرح لموقع تذكرتي </a></div>
        </div>
        <div class="col-md-3 " style="padding-top: 49px; padding-bottom: 30px;">
            <div class="col-12 text-center"> <a class="btn btn-outline-success" href="/addmatch"> لاضافه مباراه لموقع تذكرتي </a></div>
        </div>
        <div class="col-md-3 " style="padding-top: 49px; padding-bottom: 30px;">
            <div class="col-12 text-center"><a class="btn btn-outline-success" href="/addevent"> لاضافه حفله لموقع تذكرتي </a></div>
        </div>
    </div>
</div>
@endsection
