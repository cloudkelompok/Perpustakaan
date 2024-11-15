
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
        <form action="<?php echo e(route('kategori.update', $kategori)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="mb-3">
                <label>Nama</label>
                <input class="form-control" type="text" name="nama_kategori" value="<?php echo e(old('nama_kategori', $kategori->nama_kategori)); ?>" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                <a class="btn btn-danger" href="<?php echo e(route('kategori.index')); ?>"><i class="fa fa-arrow-left"></i>Kembali</a>
            </div>
        </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/kategori/edit.blade.php ENDPATH**/ ?>