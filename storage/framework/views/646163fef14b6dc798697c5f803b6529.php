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
        <form action="<?php echo e(route('buku.update', $buku)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="mb-3">
                <label>Nama</label>
                <input class="form-control" type="text" name="nama_buku" value="<?php echo e(old('nama_buku', $buku->nama_buku)); ?>" />
            </div>
            <div class="mb-3">
                <label>Kategori</label>
                <select class="form-select" name="id_kategori">
                    <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(old('id_kategori', $buku->id_kategori) == $kategori->id_kategori): ?>
                            <option value="<?php echo e($kategori->id_kategori); ?>" selected> <?php echo e($kategori->nama_kategori); ?>

                            </option>
                        <?php else: ?>
                          <option value="<?php echo e($kategori->id_kategori); ?>"> <?php echo e($kategori->nama_kategori); ?> </option>  
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <label>Tahun Terbit</label>
                <input class="form-control" type="text" name="tahun_terbit" value="<?php echo e(old('tahun_terbit', $buku->tahun_terbit)); ?>" />
            </div>
            <div class="mb-3">
                <label>Penulis</label>
                <input class="form-control" type="text" name="penulis" value="<?php echo e(old('penulis', $buku->penulis)); ?>" />
            </div>
            <div class="mb-3">
                <label>Stok</label>
                <input class="form-control" type="text" name="stok" value="<?php echo e(old('stok', $buku->stok)); ?>" />
            </div>
            <div class="mb-3">
                <label>Gambar</label>
                <input class="form-control" type="file" name="gambar" />
                <p class="form-text">Kosongkan jika tidak ingin mengubah gambar!</p>
                <img src="<?php echo e($buku->getImage()); ?>" height="100">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                <a class="btn btn-danger" href="<?php echo e(route('buku.index')); ?>"><i class="fa fa-arrow-left"></i>Kembali</a>
            </div>
        </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/buku/edit.blade.php ENDPATH**/ ?>