<?php $__env->startSection('content'); ?>



<div class="conatiner">
    <div class=" d-flex justify-content-center " style="margin-bottom: 50px;">
        <h1 style="color: #219F45;"> List Of All Matches <i class="fas fa-hand-point-down" style="font-size: 30px; "></i>
        </h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Home Team</th>
                    <th scope="col">Away Team</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Info</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                <?php $__currentLoopData = $matches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $match): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?= $i?></th>
                    <td><?php echo e($match->homeTeam); ?></td>
                    <td><?php echo e($match->awayTeam); ?></td>
                    <td><?php echo e($match->date); ?></td>
                    <td><?php echo e($match->time); ?></td>
                    <?php $true=1 ; $false=0 ?>
                    <?php if($match->status==1): ?>
                    <td><a href="/updatematch/<?php echo e($match->id); ?>/<?php echo e($false); ?>" class="btn btn-danger">Inactive</a></td>
                    <?php else: ?>
                    <td><a href="/updatematch/<?php echo e($match->id); ?>/<?php echo e($true); ?>" class="btn" style="background-color: green; color: white;width: 80px">Active</a></td>
    
                    <?php endif; ?>
    
                    
                </tr>
                <?php $i++ ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                
            </tbody>
        </table>
    </div>
    

    <div class="d-flex justify-content-center">
        <?php echo e($matches->links()); ?>

    </div>







</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\web\my projects\tazkartii\resources\views/dashboard/allMatches.blade.php ENDPATH**/ ?>