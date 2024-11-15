<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto mt-5">
                <form class="shadow" action="<?php echo e(route('user.login.action')); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div class="card">
                        <div class="card-header">
                            Login Form
                        </div>
                        <div class="card-body">
                            <?php if($errors->any()): ?>
                            <div class="alert alert-info">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($err); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Username" name="username">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary w-100">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\perpus\resources\views/user/login.blade.php ENDPATH**/ ?>