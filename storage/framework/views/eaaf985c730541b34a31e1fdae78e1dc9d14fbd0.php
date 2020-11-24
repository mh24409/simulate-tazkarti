<?php $__env->startSection('content'); ?>




<div class="container   " style="overflow: hidden;color: white;color: black">

    <div class="row d-flex justify-content-center " style="margin-top: 30px">

        <div class="carddiv col-md-2 col-sm-4 text-center  ">
            <span class=""><i class="fas fa-users" style="font-size: 15px;"></i> Users</span>
            <div class="" style="font-size: 30px;"><?php echo e($userscount); ?></div>
            <span class=""> <a class="btn btn-outline-success btn-sm" href="/dashallusers">More</a>

        </div>
        <div class=" col-md-2 col-sm-4 carddiv text-center">
            <span class=" "><i class="fas fa-users" style="font-size: 15px;"></i> Matches</span>
            <div class="" style="font-size: 30px;"><?php echo e($matchescount); ?></div>
            <span class=""> <a class="btn btn-outline-success btn-sm " href="/dashallmatches">More</a>
            </span>
        </div>
        <div class=" col-md-2 col-sm-4  carddiv text-center">
            <span class=" "><i class="fas fa-users" style="font-size: 15px;"></i> Events</span>
            <div class="" style="font-size: 30px;"><?php echo e($eventscount); ?></div>
            <span class=" "> <a class="btn btn-outline-success btn-sm" href="/dashallEvents">More</a>
            </span>
        </div>
        <div class=" col-md-2 col-sm-4 carddiv text-center ">
            <span class=" "><i class="fas fa-users" style="font-size: 15px;"></i>Stediums</span>
            <div class="" style="font-size: 30px;"><?php echo e($staduimscount); ?></div>
            <span class=""> <a class="btn btn-outline-success btn-sm" href="/dashallstaduims">More</a>
            </span>
        </div>
        <div class=" col-md-2 col-sm-4 text-center  lastlast" >
            <span><i class="fas fa-users" style="font-size: 15px;"></i>Theater</span>
            <div class="" style="font-size: 30px;"><?php echo e($theaterscount); ?></div>
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
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="media event ">
                        <a class="text-center"
                            style="background-color: unset; border: solid 1px #0463CE; width: 50px; border-radius: 20px; height: 30px;padding-top: 5px; margin-right: 15px;margin-top: 5px;">
                            <?= $i?>
                        </a>
                        <div class="media-body">
                            <a style="color: black" href="#"><?php echo e($user->fisrtname); ?> <?php echo e($user->thirdtname); ?></a>
                            <p style="color: gray"><?php echo e($user->email); ?></p>
                        </div>
                    </article>
                    <?php $i++ ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



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
                    <?php $__currentLoopData = $staduims; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staduim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="media event ">
                        <a class="text-center"
                            style="background-color: unset; border: solid 1px #0463CE; width: 50px; border-radius: 20px; height: 30px;padding-top: 5px; margin-right: 15px;margin-top: 5px;">
                            <?= $i?>
                        </a>
                        <div class="media-body">
                            <p style="color: black"><?php echo e($staduim->name); ?> </p>
                            <p style="color: gray"><?php echo e($staduim->address); ?> </p>
                        </div>
                    </article>
                    <?php $i++ ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <?php $__currentLoopData = $theaters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theater): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="media event ">
                        <a class="text-center"
                            style="background-color: unset; border: solid 1px #0463CE; width: 50px; border-radius: 20px; height: 30px;padding-top: 5px; margin-right: 15px;margin-top: 5px;">
                            <?= $i?>
                        </a>
                        <div class="media-body">
                            <p style="color: black"><?php echo e($theater->name); ?> </p>
                            <p style="color: gray"><?php echo e($theater->address); ?> </p>
                        </div>
                    </article>
                    <?php $i++ ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\my projects\tazkartii\resources\views/dashboard/index.blade.php ENDPATH**/ ?>