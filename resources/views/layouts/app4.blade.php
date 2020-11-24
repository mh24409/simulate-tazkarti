<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/js/all.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/popper.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/all.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/brands.css') }}" rel="stylesheet">

    <link href="{{ asset('css/css/solid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboardasset/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboardasset/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboardasset/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboardasset/maps/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet">

    <!-- --------------------------- -->

    <link rel="stylesheet" type="text/css" href="{{ asset('sidebar/css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('sidebar/css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('sidebar/css/component.css')}}" />
    <script src="{{ asset('sidebar/js/modernizr.custom.js')}}"></script>


    <!-- ----------------------------------------- -->

    <style>
        body {
            background-color: #F7F7F7;
        }
    </style>

</head>


<body>
    <div class="container" id="b">
        <ul id="gn-menu" class=" fixed-top gn-menu-main navbar navbar-expand  shadow-sm "
            style="background-color: #219F45;">
            <li class="gn-trigger">
                <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                <nav class="gn-menu-wrapper" style="background-color: #219F45;">
                    <div class="gn-scroller">
                        <ul class="gn-menu">
                            <li style="padding-left: 20px; "><a href="/dashboard" style="color: white;">
                                    <i class="fas fa-clipboard-list" style="font-size: 20px; margin-right: 25px;"></i>
                                    Dashboard</a>
                            </li>

                            <li style="padding-left: 15px; "><a href="/dashallusers" style="color: white;">
                                    <i class="fas fa-users" style="font-size: 20px; margin-right: 25px;"></i>
                                    All Users</a>
                            </li>
                            <li style="padding-left: 20px; "><a href="/dashallmatches" style="color: white;">
                                    <i class="far fa-futbol" style="font-size: 20px; margin-right: 25px;"></i>
                                    All Matches</a>
                            </li>
                            <li style="padding-left: 20px; "><a href="/addmatch" style="color: white;">
                                    <i class="fas fa-plus" style="font-size: 20px; margin-right: 25px;"></i>
                                    Add Match</a>
                            </li>
                            <li style="padding-left: 20px; "><a href="/dashallEvents" style="color: white;">
                                    <i class="fas fa-microphone" style="font-size: 20px; margin-right: 25px;"></i>
                                    All Events</a>
                            </li>
                            <li style="padding-left: 20px; "><a href="/addevent" style="color: white;">
                                    <i class="fas fa-plus" style="font-size: 20px; margin-right: 25px;"></i>
                                    Add Events</a>
                            </li>
                            <li style="padding-left: 15px; "><a href="/dashallstaduims" style="color: white;">
                                    <img style="width: 30px;margin-right: 25px;" src="{{asset('storage/images/sports.svg')}}" alt="">All
                                    staduims</a>
                            </li>
                            <li style="padding-left: 20px; "><a href="/addstaduims" style="color: white;">
                                    <i class="fas fa-plus" style="font-size: 20px; margin-right: 25px;"></i>
                                    Add staduims</a>
                            </li>
                            <li style="padding-left: 15px; "><a href="/dashalltheater" style="color: white;">
                                <img style="width: 30px;margin-right: 25px;" src="{{asset('storage/images/events.svg')}}" alt="">
                                    All Theater</a>
                            </li>
                            <li style="padding-left: 20px; "><a href="/addtheater" style="color: white;">
                                    <i class="fas fa-plus" style="font-size: 20px; margin-right: 25px;"></i>
                                    Add Theater</a>
                            </li>

                        </ul>
                    </div>
                </nav>

            </li>



            <li style="padding: 10px;">
                <a class="navbar-brand" href="{{ url('/index') }}">
                    <img style="height: 35px" src="{{asset("storage/images/download1.svg")}}" alt="">
                </a>

            </li>


            <li class="navbar-nav ml-auto">
                @guest
                @if (Route::has('register'))
            <li class="nav-item d-none d-xl-block d-lg-block d-md-block ">
                <a class="nav-link" style="color: white;" href="{{ route('register') }}"> <i class="fas fa-user-plus"
                        style="font-size: 15px;"></i> {{ __('Register') }} </a>
            </li>
            <li class="nav-item d-lg-none d-xl-none d-md-none">
                <a class="nav-link" href="{{ route('register') }}"> <i class="fas fa-user-plus"
                        style="font-size: 20px; color: white;"></i> </a>
            </li>
            @endif

            <!-- login -->
            <li class="nav-item d-none d-xl-block d-lg-block d-md-block">
                <a style="color: white;" class="nav-link" href="{{ route('login') }}"><i class="fas fa-unlock"
                        style="font-size: 15px;"></i>
                    {{ __('Login') }}</a>
            </li>
            <li class="nav-item d-lg-none d-xl-none d-md-none">
                <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-unlock"
                        style="font-size: 20px; color: white;"></i> </a style="font-size: 20px;"></i>
            </li>


            @else

            <li class="nav-item d-none d-xl-block d-lg-block d-md-block">
                <a style="color: white;" class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt" style="font-size: 17px;"></i> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

            <li class="nav-item d-lg-none d-xl-none d-md-none">
                <a style="color: white;" class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt" style="font-size: 15px;"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>


            @endguest
            </li>


        </ul>




    </div>

    <div id="app" style="margin-top: 60px;">
        <div id="content">
            @include('layouts.message')


            <main>
                @yield('content')
            </main>

        </div>
    </div>

    <script src="{{asset('sidebar/js/classie.js')}}"></script>
    <script src="{{asset('sidebar/js/gnmenu.js')}}"></script>

    <script>
        new gnMenu(document.getElementById('gn-menu'));
    </script>



</body>

</html>