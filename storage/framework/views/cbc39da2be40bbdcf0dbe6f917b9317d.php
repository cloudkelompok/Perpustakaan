
<?php $__env->startSection('content'); ?>
    <h2>Skill</h2>
    <p>Berikut skill yang Saya miliki:</p>
    <ol>
        <?php for($a = 0; $a < count($skill); $a++): ?>
        <li><?php echo e($skill[$a]); ?></li>
        <?php endfor; ?>
    </ol>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('m4.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/m4/skill.blade.php ENDPATH**/ ?>