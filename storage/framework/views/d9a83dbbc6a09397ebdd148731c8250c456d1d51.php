<?php $__env->startSection('content'); ?>
<div style="height: 100%;">


    <section class="sectionhome">
        <div class="container">
            <div class="titletext"> What is your next plan?</div>
            <div class="desctext">Explore and book all exclusive events and matches.
            </div>
            <div class="row justify-content-center">
                <div class="cards">
                    <div class="card-body">
                        <h5 class="card-title"><img style="width: 90px;" src="<?php echo e(asset('storage/images/sports.svg')); ?>"
                                alt=""></h5>
                                <p style="font-weight: bold;">Sports</p>
                        <p class="card-text"><small style="font-weight: bold;">Match Tickets</small></p>
                    </div>
                </div>
                <div class="cards2">
                    <div class="card-body">
                        <h5 class="card-title"><img style="width: 70px;" src="<?php echo e(asset('storage/images/events.svg')); ?>"
                                alt=""></h5>
                                <p style="font-weight: bold;">Entertanment</p>
                        <p class="card-text"><small style="font-weight: bold;" >Events Tickets</small></p>
                    </div>
                </div>
                <div class="  cards3">
                    <div class="card-body bg-green">
                        <h5 class="card-title"><img style="width: 70px;" src="<?php echo e(asset('storage/images/more.svg')); ?>"
                                alt=""></h5>
                                <p style="font-weight: bold;">More</p>
                        <p class="card-text"><small style="font-weight: bold;" > Other events</small></p>
                    </div>
                </div>
            </div>

            <div style="margin-top: 60px;">
                <div style="display: inline-block;">
                    <a style="color: white ; font-weight: bold;" class="nav-link" href="<?php echo e(route('login')); ?>"></i>
                        <?php echo e(__('Sign In')); ?></a>

                </div>
                Or
                <div style="display: inline-block; background-color: rgb(15, 163, 15);">
                    <a style="color: white; font-weight: bold;" class="nav-link" href="<?php echo e(route('register')); ?>"> <i
                            class="fas fa-user-plus" style="font-size: 15px;"></i> <?php echo e(__('Register Now')); ?> </a>
                </div>
            </div>
            <div style="margin-top: 64px;">
                <div style="display: inline-block;">
                    <p style="margin-bottom: 1px; font-size: 10px;"> © 2019 Tazkarti. All rights reserved.
                    </p>
                    <p style="margin-top: 2px;font-size: 10px;">Developed By GET Group</p>
                </div>

            </div>

        </div>

    </section>
    

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\tazkartii\resources\views//tazkarti.blade.php ENDPATH**/ ?>