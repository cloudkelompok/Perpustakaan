<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minggu 04: Latihan 03</title>
</head>
<body>
    <p>Halo, nama saya <strong><?php echo e($nama); ?></strong>, hobi saya antara lain:</p>
    <ul>
        <?php $__currentLoopData = $hobi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($val); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <p>Berikut skill yang Saya miliki:</p>
    <ol>
        <?php for($a = 0; $a < count($skill); $a++): ?>
        <li><?php echo e($skill[$a]); ?></li>
        <?php endfor; ?>
    </ol>
</body>
</html><?php /**PATH C:\xampp\htdocs\perpus\resources\views/m4/lat3.blade.php ENDPATH**/ ?>