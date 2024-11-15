
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6">
            <?php if(session()->has('message')): ?>
                <p class="alert alert-info"><?php echo e(session('message')); ?></p>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-info">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($err); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('user.password.action')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label>Password Lama</label>
                    <input class="form-control" type="password" name="pass1" />
                </div>
                <div class="mb-3">
                    <label>Password Baru</label>
                    <input class="form-control" type="password" name="pass2" />
                </div>
                <div class="mb-3">
                    <label>Konfirmasi Password Baru</label>
                    <input class="form-control" type="password" name="pass3" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Ubah Password</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/user/password.blade.php ENDPATH**/ ?>