<?php $__env->startSection('content'); ?>



<div class="conatiner">
    <div class=" d-flex justify-content-center " style="margin-bottom: 50px;">
        <h1 style="color: #219F45;"> List Of All Staduims <i class="fas fa-hand-point-down" style="font-size: 30px; "></i>
        </h1>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Chairs Number</th>
                <th>Info</th>
            </tr>
        </thead>
        <tbody id="intial_table">
            <?php $i = 1 ?>
            <?php $__currentLoopData = $staduims; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staduim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <th > <?= $i ?></th>
                <td><?php echo e($staduim->name); ?></td>
                <td><?php echo e($staduim->address); ?></td>
                <td><?php echo e($staduim->noOfChairs); ?></td>
                <td><button type="button" class="btn btn-light">more</button></td>

            </tr><?php $i++ ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        <?php echo e($staduims->links()); ?>

    </div>

</div>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\tazkartii\resources\views/dashboard/allstaduims.blade.php ENDPATH**/ ?>