<?php $__env->startSection('content'); ?>



<div class="conatiner">
    <div class=" d-flex justify-content-center " style="margin-bottom: 50px;">
        <h1 style="color: #219F45;"> List Of All Events <i class="fas fa-hand-point-down" style="font-size: 30px; "></i>
        </h1>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Type</th>
                <th scope="col">Desc</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Info</th>

            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td><?php echo e($event->type); ?></td>
                <td><?php echo e($event->disc); ?></td>
                <td><?php echo e($event->date); ?></td>
                <td><?php echo e($event->time); ?></td>
                <?php $true=1 ; $false=0 ?>
                    <?php if($event->status==1): ?>
                    <td><a href="/updateevent/<?php echo e($event->id); ?>/<?php echo e($false); ?>" class="btn btn-danger">Inactive</a></td>
                    <?php else: ?>
                    <td><a href="/updateevent/<?php echo e($event->id); ?>/<?php echo e($true); ?>" class="btn" style="background-color: green; color: white;width: 80px">Active</a></td>
    
                    <?php endif; ?>
                    <?php $i++ ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <?php echo e($events->links()); ?>

    </div>







</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\tazkartii\resources\views/dashboard/allEvents.blade.php ENDPATH**/ ?>