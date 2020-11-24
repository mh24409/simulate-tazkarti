<?php $__env->startSection('content'); ?>




<div class="conatiner">
    <div class=" d-flex justify-content-center " style="margin-bottom: 50px;">
        <h1 style="color: #219F45;"> List Of All Users <i class="fas fa-hand-point-down" style="font-size: 30px; "></i>
        </h1>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th class="d-none d-xl-block d-lg-block d-md-block" scope="col">Email</th>
                <th scope="col">Nation Id</th>
                <th scope="col">Mobile</th>
                <th scope="col">Info</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row">1</th>
                <td><?php echo e($user->fisrtname); ?></td>
                <td><?php echo e($user->thirdtname); ?></td>
                <td class="d-none d-xl-block d-lg-block d-md-block"><?php echo e($user->email); ?></td>
                <td><?php echo e($user->nationalid); ?></td>
                <td><?php echo e($user->mobile); ?></td>
                <td><a href="/userprofile/<?=$user->id?>" type="button" class="btn btn-light">more</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            

        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        <?php echo e($users->links()); ?>

    </div>







</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\my projects\tazkartii\resources\views/dashboard/allUsers.blade.php ENDPATH**/ ?>