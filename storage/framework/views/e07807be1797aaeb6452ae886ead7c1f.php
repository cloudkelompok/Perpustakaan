
<?php $__env->startSection('content'); ?>
    <h2>Identitas</h2>
    <p>Halo, nama saya <strong><?php echo e($nama); ?></strong>,
    saya tinggal di <strong><?php echo e($alamat); ?></strong></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('m4.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/m4/identitas.blade.php ENDPATH**/ ?>