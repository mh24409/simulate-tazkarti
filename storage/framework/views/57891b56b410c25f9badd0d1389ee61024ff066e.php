<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="back" style=" padding-top: 30px;">
    <div class="d-flex justify-content-center" style="height: 100px;">
        <img style=" height: 150px; width: 150px; z-index: 10;" class="rounded border border-dafault"
            src="<?php echo e(asset('storage/images/users/'.$user->personalimage)); ?>" alt="">
    </div>
    <div class="d-flex justify-content-center" style="color: white;">
        <div class="col-7 border border-dafault" style=" padding-top: 100px;">
            <div class="table-responsive">
                <table class="table " style="color: white;">
                    
                    <tbody>

                        <tr>
                            <th> <i class="fas fa-file-signature" style="font-size: 15px;"></i> First Name</th>
                            <td><?php echo e($user->fisrtname); ?></td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-file-signature" style="font-size: 15px;"></i> second Name</th>
                            <td><?php echo e($user->secondtname); ?></td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-file-signature" style="font-size: 15px;"></i> last Name</th>
                            <td><?php echo e($user->thirdtname); ?></td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-file-signature" style="font-size: 15px;"></i> Mom name</th>
                            <td><?php echo e($user->momname); ?></td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-male" style="font-size: 20px;"></i> Gender</th>
                            <td><?php echo e($user->gender); ?></td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-file-medical" style="font-size: 15px;"></i> blood</th>
                            <td><?php echo e($user->blood); ?></td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-phone-square" style="font-size: 15px;"></i> Mobile</th>
                            <td><?php echo e($user->mobile); ?></td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-passport" style="font-size: 15px;"></i> Nationality</th>
                            <td><?php echo e($user->national); ?></td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-passport" style="font-size: 15px;"></i> National ID</th>
                            <td><?php echo e($user->nationalid); ?></td>
                        </tr>
                        <tr>
                            <th> <i class="fas fa-envelope-open-text" style="font-size: 15px;"></i> Email</th>
                            <td><?php echo e($user->email); ?></td>
                        </tr>
                    </tbody>
                    
                    
                </table>
            </div>


        </div>



    </div>

</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\tazkartii\resources\views/myprofile.blade.php ENDPATH**/ ?>