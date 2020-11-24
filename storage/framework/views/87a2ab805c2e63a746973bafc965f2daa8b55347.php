<?php $__env->startSection('content'); ?>




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
        <?php $__currentLoopData = $matchetickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="background-color: white; margin-bottom: 5px ; height: 60px;overflow: hidden;" class="row">
            <div style="margin-left: 10px"><img style="width: 20px" src="<?php echo e(asset('storage/images/deleviered.svg')); ?>"
                    alt=""></div>

            <div class="col" style="display: inline-block"> <label style="font-weight: bold; margin-bottom: 2px;">
                    <?php echo e($ticket->homeTeam); ?> vs <?php echo e($ticket->awayTeam); ?></label><br> <label
                    style="font-size: 10px; letter-spacing: 5px;"><?php echo e($ticket->date); ?> <?php echo e($ticket->time); ?></label></div>
            <div class="col text-center" style="display: inline-block;padding-top: 20px"> <?php echo e($ticket->fisrtname); ?>

                <?php echo e($ticket->thirdtname); ?></div>
            <div class="col text-center" style="display: inline-block ;padding-top: 20px"> deleivered</div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $eventticket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="background-color: white; margin-bottom: 5px ; height: 60px;overflow: hidden;" class="row">
            <div style="margin-left: 10px"><img style="width: 20px" src="<?php echo e(asset('storage/images/deleviered.svg')); ?>"
                    alt=""></div>

            <div class="col" style="display: inline-block"> <label style="font-weight: bold; margin-bottom: 2px;">
                    <?php echo e($ticket->disc); ?></label><br> <label
                    style="font-size: 10px; letter-spacing: 5px;"><?php echo e($ticket->date); ?> <?php echo e($ticket->time); ?></label></div>
            <div class="col text-center" style="display: inline-block; padding-top: 20px"> <?php echo e($ticket->fisrtname); ?>

                <?php echo e($ticket->thirdtname); ?></div>
            <div class="col text-center" style="display: inline-block ; padding-top: 20px"> deleivered</div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\tazkartii\resources\views/mytickets.blade.php ENDPATH**/ ?>