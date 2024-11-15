<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minggu 05: Tugas 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($err); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('m5.tugas2.action')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label>Panjang</label>
                        <input type="text" class="form-control" name="panjang" value="<?php echo e(old('nilai', 0)); ?>" />
                    </div>
                    <div class="mb-3">
                        <label>Lebar</label>
                        <input type="text" class="form-control" name="lebar" value="<?php echo e(old('nilai', 0)); ?>"/>
                    </div>
                    <div class="mb-3">
                        <label>Tinggi</label>
                        <input type="text" class="form-control" name="tinggi" value="<?php echo e(old('nilai', 0)); ?>"/>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\perpus\resources\views/m5/tugas2.blade.php ENDPATH**/ ?>