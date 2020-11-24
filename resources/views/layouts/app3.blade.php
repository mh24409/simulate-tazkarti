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


</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand navbar-light shadow-sm  " style="background-color: #219F45;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/index') }}">
                    <img style="height: 35px" src="{{asset("storage/images/download.svg")}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('register'))
                        <li class="nav-item d-none d-xl-block d-lg-block d-md-block ">
                            <a style="color: white" class="nav-link" href="{{ route('register') }}"> <i
                                    class="fas fa-user-plus" style="font-size: 15px;"></i> {{ __('Register') }} </a>
                        </li>
                        <li class="nav-item d-lg-none d-xl-none d-md-none">
                            <a style="color: white" class="nav-link" href="{{ route('register') }}"> <i
                                    class="fas fa-user-plus" style="font-size: 20px;"></i> </a>
                        </li>
                        @endif

                        <!-- login -->
                        <li class="nav-item d-none d-xl-block d-lg-block d-md-block">
                            <a style="color: white" class="nav-link" href="{{ route('login') }}"><i
                                    class="fas fa-unlock" style="font-size: 15px;"></i> {{ __('Login') }}</a>
                        </li>
                        <li class="nav-item d-lg-none d-xl-none d-md-none">
                            <a style="color: white" class="nav-link" href="{{ route('login') }}"><i
                                    class="fas fa-unlock" style="font-size: 20px;"></i></a>
                        </li>

                        <!-- update information -->
                        <li class="nav-item d-none d-xl-block d-lg-block d-md-block">
                            <a style="color: white" class="nav-link" href="#"><i class="fas fa-expand-alt"
                                    style="font-size: 15px;"></i>
                                Update Information</a>
                        </li>
                        <li class="nav-item d-lg-none d-xl-none d-md-none">
                            <a style="color: white" class="nav-link" href="#"><i class="fas fa-expand-alt"
                                    style="font-size: 20px;"></i></a>
                        </li>

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



        <div id="mySidenav" class="sidenav">
            <div class="">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a style="font-size: 15PX; height: 20px;" href="#">HOME</a>
            <hr style="background-color: rgba(255, 255, 255, 0.561);">
            <a style="font-size: 15PX;height: 20px;" href="#">STADIUM LOCATION </a>
            <hr style="background-color: rgba(255, 255, 255, 0.561);">
            <a style="font-size: 15PX;height: 20px;" href="#">OUR STORES</a>
            <hr style="background-color: rgba(255, 255, 255, 0.561);">
            <a style="font-size: 15PX;height: 20px;" href="#">FAQ</a>
            <hr style="background-color: rgba(255, 255, 255, 0.561);">
            <a style="font-size: 15PX;height: 20px;" href="#">ABOUT TAZKARTI</a>
            <hr style="background-color: rgba(255, 255, 255, 0.561);">
            <a style="font-size: 15PX;height: 20px;" href="#">CONTACT US</a>
            <hr style="background-color: rgba(255, 255, 255, 0.561);">

            <div class="intolinks">
                <span><a style="color: white; display: inline-block;" href=""><i class="fab fa-facebook-f"
                            style="font-size: 25px;"></i></a></span>
                <span><a style="color: white;display: inline-block;" href=""><i class="fab fa-twitter"
                            style="font-size: 25px;"></i></a></span>
                <span><a style="color: white;display: inline-block;" href=""><i class="fab fa-instagram"
                            style="font-size: 25px;"></i></a></span>

            </div>
        </div>

        <div id="sidenavbutton"
            style="float: left; width: 50px ; height: 100%; background-color: black; padding-left: 10px"
            class="fixed-top text-center">

            <div style="font-size:30px;cursor:pointer; float: left; margin-top: 50px ; color: white"
                onclick="openNav()">
                &#9776; </div>

        </div>







        <div id="content">

            <main>
                @yield('content')
            </main>
        </div>




    </div>


</body>

</html>