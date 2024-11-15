
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6">
            <?php if($errors->any()): ?>
                <div class="alert alert-info">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($err); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
        <form action="<?php echo e(route('user.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label>Nama User</label>
                <input class="form-control" type="text" name="nama_user" value="<?php echo e(old('nama_user')); ?>" />
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input class="form-control" type="text" name="email" value="<?php echo e(old('email')); ?>" />
            </div>
            <div class="mb-3">
                <label>Username</label>
                <input class="form-control" type="text" name="username" value="<?php echo e(old('username')); ?>" />
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input class="form-control" type="text" name="password" value="<?php echo e(old('password')); ?>" />
            </div>
            <div class="mb-3">
                <label>Telepon</label>
                <input class="form-control" type="text" name="no_tlp" value="<?php echo e(old('no_tlp')); ?>" />
            </div>
            <div class="mb-3">
                <label>Level</label>
                <select name="level" class="form-select">
                    <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(old('level') == $level): ?>
                        <option value="<?php echo e($level); ?>" selected></option>
                        <?php else: ?>
                        <option value="<?php echo e($level); ?>"> <?php echo e($level); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                <a class="btn btn-danger" href="<?php echo e(route('user.index')); ?>"><i class="fa fa-arrow-left"></i>Kembali</a>
            </div>
        </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/user/create.blade.php ENDPATH**/ ?>