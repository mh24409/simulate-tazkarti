<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li> 
            <?php echo e($error); ?>

           
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<?php if(session('status')): ?>
<?php $m = session('status') ; ?>
<script>
    Swal.fire({
        icon: 'success',
        text: '<?= $m ?>' ,
    })
</script>
<?php endif; ?>

<?php if(session('wrong')): ?>
<?php $m = session('wrong') ; ?>
<script>
    Swal.fire({
        icon: 'error',
        text: '<?= $m ?>' ,
    })
</script>
<?php endif; ?><?php /**PATH E:\web\tazkartii\resources\views/layouts/message.blade.php ENDPATH**/ ?>