<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>


    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/js/all.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/jquery.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/popper.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/css/all.css')); ?>" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="<?php echo e(asset('css/css/fontawesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/css/brands.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/css/solid.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/home.css')); ?>" rel="stylesheet">


</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand navbar-light shadow-sm  " style="background-color: #219F45;">
            <div class="container">
                <div style="font-size:30px;cursor:pointer; margin-right: 30px;color: white;" onclick="openNav()">
                    &#9776; </div>
                <a class="navbar-brand" href="<?php echo e(url('/index')); ?>">
                    <img style="height: 35px" src="<?php echo e(asset("storage/images/download1.svg")); ?>" alt="">
                </a>




                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <div class="btn-group">
                                <a style="  color: white; " class="notification " type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell" style="font-size: 20px;"></i>
                            <span style="font-size: 10px;" class="badge">
                                <?php if($userunreadnoticount!=0): ?>
                                <?php echo e($userunreadnoticount); ?>

                                    
                                <?php endif; ?>
                                </span>
                                </a>
                                <div class="dropdown-menu" style="min-width: 20rem !important ;padding: 1px;">
                                    <div style="width: 100%" class="d-flex justify-content-end"> <a style="" class="btn btn-sm" href="/readnoti"><i class="fas fa-check" style="font-size: 15px;"></i></a> </div>
                                    <?php $__currentLoopData = $userunreadnoti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row"
                                        style=" margin: 0px; overflow: hidden;background-color: rgba(223, 217, 217, 0.418)">
                                        <div class="col-3 text-center">
                                            <i class="fas fa-expand-alt" style="font-size: 20px;margin-top: 15px;"></i> </div>
                                        <div class="col-9 text-left">
                                            <span><?php echo e($noti->data['text']); ?></span> code is <span
                                                style="color: red"><?php echo e($noti->data['code']); ?></span>
                                        </div>
                                    </div>
                                    <hr style="margin: 3px;">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__currentLoopData = $userreadnoti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row"
                                        style=" margin: 0px; overflow: hidden;">
                                        <div class="col-3 text-center">
                                            <i class="fas fa-expand-alt" style="font-size: 20px;margin-top: 15px;"></i> </div>
                                        <div class="col-9 text-left">
                                            <span><?php echo e($noti->data['text']); ?></span> code is <span
                                                style="color: red"><?php echo e($noti->data['code']); ?></span>
                                        </div>
                                    </div>
                                    <hr style="margin: 3px;">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                        </li>
                        <!-- Authentication Links -->


                        <?php if(Auth::user()->role=='admin'): ?>
                        <li class="nav-item d-none d-xl-block d-lg-block d-md-block">
                            <a style="color: white" class="nav-link" href="/dashboard"><i class="fas fa-address-card"
                                    style="font-size: 20px;"></i>
                                Dashboard</a>
                        </li>
                        <li class="nav-item d-lg-none d-xl-none d-md-none">
                            <a style="color: white" class="nav-link" href="/dashboard"><i class="fas fa-address-card"
                                    style="font-size: 18px;"></i></a>
                        </li>
                        <?php endif; ?>


                        <?php if(Auth::user()->status==0): ?>
                        <!-- update information -->
                        <li class="nav-item d-none d-xl-block d-lg-block d-md-block">
                            <a style="color: white" class="nav-link" href="/updateinformation"><i class="fas fa-expand-alt"
                                    style="font-size: 15px;"></i>
                                Update Information</a>
                        </li>
                        <li class="nav-item d-lg-none d-xl-none d-md-none">
                            <a style="color: white" class="nav-link" href="/updateinformation"><i class="fas fa-expand-alt"
                                    style="font-size: 20px;"></i></a>
                        </li>
                        <?php endif; ?>

                        <!--  profile -->
                        <?php $id = Auth::user()->id ?>
                        <li class="nav-item d-none d-xl-block d-lg-block d-md-block">
                            <a style="color: white" class="nav-link" href="/myprofile/<?=$id?>"><i class="fas fa-user"
                                    style="font-size: 20px;"></i>
                                My Profile</a>
                        </li>
                        <li class="nav-item d-lg-none d-xl-none d-md-none">
                            <a style="color: white" class="nav-link" href="#"><i class="fas fa-expand-alt"
                                    style="font-size: 20px;"></i></a>
                        </li>


                        <li class="nav-item d-none d-xl-block d-lg-block d-md-block" aria-labelledby="navbarDropdown">
                            <a style="color: white" class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt" style="font-size: 20px;"></i>
                                <?php echo e(__('Sign Out')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                        <li class="nav-item d-lg-none d-xl-none d-md-none" aria-labelledby="navbarDropdown">
                            <a style="color: white" class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt" style="font-size: 20px;"></i>
                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                        <!-- notifiacations -->


                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand navbar-light shadow-sm nav-item d-lg-none d-xl-none  fixed-bottom "
            style="background-color: #FFFFFF;">

            <div class="collapse navbar-collapse">

                <ul class="navbar-nav row " style="width: 100%;">
                    <li class="nav-item col">
                        <a style="color: black" class="nav-link" href="#"> <i class="fas fa-home"
                                style="font-size: 30px;"></i>
                        </a>
                    </li>
                    <li class="nav-item col ">
                        <a style="color: black" class="nav-link" href="#"> <i class="far fa-futbol"
                                style="font-size: 30px;"></i>
                        </a>
                    </li>
                    <li class="nav-item col ">
                        <a style="color: black" class="nav-link" href="#"> <i class="fas fa-calendar-week"
                                style="font-size: 30px;"></i>
                        </a>
                    </li>
                    <li class="nav-item  col">
                        <a style="color: black" class="nav-link" href="#"> <i class="fas fa-ticket-alt"
                                style="font-size: 30px;"></i></em>
                        </a>
                    </li>
                    <li class="nav-item col">
                        <a style="color: black" class="nav-link" href="#"> <i class="fas fa-user-friends"
                                style="font-size: 30px;"></i></a>
                    </li>
                </ul>

            </div>
        </nav>
        <nav class="navbar navbar-expand  ">
            <div class="container-fluid " style="background-color: white;">
                <div class="container clearfix">

                    <div class="userinfo row">
                        <div style="display: inline-block" class="col-lg-5 col-md-4 col-sm-2">
                            <?php $image = Auth::user()->personalimage ?>
                            <img class="divimage" style="border-radius: 50%;"
                                src="<?php echo e(asset("storage/images/users/$image")); ?>" alt="">
                        </div>
                        <div style="color: black;display: inline-block" class="col-lg-5 col-md-4 col-sm-2">
                            <h6></span><strong> WELCOME </strong> </h6>
                            <h6><?php echo e(Auth::user()->fisrtname); ?> <?php echo e(Auth::user()->thirdname); ?></h6>
                            <h6>
                                <?php if(Auth::user()->status==1): ?>
                                <button disabled class="btn btn-success btn-sm">Active</button>
                                <?php else: ?>
                                <button disabled class="btn btn-danger btn-sm">Inactive</button>
                                <?php endif; ?>
                                <?php if(Auth::user()->role=='admin'): ?>
                                <button disabled class="btn btn-dark btn-sm">Admin</button>
                                <?php endif; ?>
                            </h6>
                            <h6>
                                <p class="text-muted" style="display: inline-block;"> Tazkarti ID : </p> <em>
                                    <?php echo e(Auth::user()->id); ?>

                                </em>
                            </h6>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" style="color: black;" id="navbarSupportedContent">


                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item d-none d-xl-block d-lg-block  ">
                                <a style="color: black" class="nav-link" href="/index"> <i class="fas fa-home"
                                        style="font-size: 15px;"></i> <em> Home </em>
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-block d-lg-block  ">
                                <a style="color: black" class="nav-link" href="/allmatches"> <i class="far fa-futbol"
                                        style="font-size: 15px;"></i> <em> Matches </em>
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-block d-lg-block  ">
                                <a style="color: black" class="nav-link" href="/allevents"> <i
                                        class="fas fa-calendar-week" style="font-size: 15px;"></i> <em> Events </em>
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-block d-lg-block  ">
                                <a style="color: black" class="nav-link" href="/mytickets"> <i class="fas fa-ticket-alt"
                                        style="font-size: 15px;"></i> <em> My Tickets </em>
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-block d-lg-block ">
                                <a style="color: black" class="nav-link" href="#"> <i class="fas fa-user-friends"
                                        style="font-size: 15px;"></i> <em>Dependents</em> </a>
                            </li>

                        </ul>

                    </div>
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
        <div class="container-fluid " style="background-color: #E9E9E9">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-10">
                    <div class="onoffswitch3">
                        <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3"
                            checked>
                        <label class="onoffswitch3-label" for="myonoffswitch3">
                            <span class="onoffswitch3-inner">
                                <span class="">
                                    <marquee class="scroll-text">Tazkarti ID is your pass to stadiums. It is an
                                        effective method to achieve the safety of fans allowing identifying them in the
                                        stadium. Tazkarti is also a ticketing provider and event organizer that plans
                                        and hosts its own events all around Egypt.<span
                                            class="glyphicon glyphicon-forward"></span>
                                    </marquee>
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <?php echo $__env->make('layouts.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <main>
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>




    </div>



</body>


</html><?php /**PATH E:\web\my projects\tazkartii\resources\views/layouts/app2.blade.php ENDPATH**/ ?>