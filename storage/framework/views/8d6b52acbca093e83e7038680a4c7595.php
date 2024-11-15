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
        <form action="<?php echo e(route('peminjaman.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label>Tanggal</label>
                <input class="form-control" type="date" name="tgl_pinjam" value="<?php echo e(old('tgl_pinjam', date('Y-m-d'))); ?>" />
            </div>
            <div class="mb-3">
                <label>Buku</label>
                <select class="form-select" name="id_buku" onchange="hitung()">
                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(old('id_buku') == $buku->id_buku): ?>
                            <option value="<?php echo e($buku->id_buku); ?>" data-stok="<?php echo e($buku->stok); ?>" selected> <?php echo e($buku->nama_buku); ?>

                            </option>
                        <?php else: ?>
                          <option value="<?php echo e($buku->id_buku); ?>" data-stok="<?php echo e($buku->stok); ?>"> <?php echo e($buku->nama_buku); ?> </option>  
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <label>Jumlah Pinjam</label>
                <input class="form-control" type="text" name="jumlah_pinjam" value="<?php echo e(old('jumlah_pinjam')); ?>" />
            </div>
            <div class="mb-3">
                <label>Stok</label>
                <input class="form-control" type="text" name="stok" value="<?php echo e(old('stok')); ?>" readonly />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                <a class="btn btn-danger" href="<?php echo e(route('peminjaman.index')); ?>"><i class="fa fa-arrow-left"></i>Kembali</a>
            </div>
        </form>
        </div>
    </div>
    <script>
        function hitung() {
            let stok = $('select[name=id_buku]').find(':selected').data('stok')
            $('input[name=stok]').val(stok);
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/peminjaman/create.blade.php ENDPATH**/ ?>