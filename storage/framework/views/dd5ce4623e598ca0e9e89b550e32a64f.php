
<?php $__env->startSection('content'); ?>
    <h2>Pendidikan</h2>
    <p>Berikut Pendidikan yang telah Saya ikuti:</p>
    <ul>
        <?php for($a = 0; $a < count($pendidikan); $a++): ?>
        <li><?php echo e($pendidikan[$a]); ?></li>
        <?php endfor; ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('m4.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/m4/pendidikan.blade.php ENDPATH**/ ?>