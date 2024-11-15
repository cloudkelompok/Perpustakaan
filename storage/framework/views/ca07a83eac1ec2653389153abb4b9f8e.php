
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-7 m-auto border shadow">
              <?php if($errors->any()): ?>
                <div class="alert alert-info">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($err); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>          
            <form action="<?php echo e(route('peminjaman.update',$peminjaman)); ?>" method="post" class="m-5 p-5 rounded">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="mb-3">
                    <label for="buku" class="form-label">Buku</label>
                    <select name="id_buku" id="buku" class="form-select">
                        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(old('id_buku',$peminjaman->id_buku)==$book->id_buku): ?>
                                <option value="<?php echo e($book->id_buku); ?>" selected><?php echo e($book->nama_buku); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($book->id_buku); ?>"><?php echo e($book->nama_buku); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" class="form-control" id="tgl_pinjam" placeholder="Masukkan tanggal pinjam" name='tgl_pinjam' value=<?php echo e(old('tgl_pinjam',$peminjaman->tgl_pinjam)); ?>>
                </div>
                <div class="mb-3">
                    <label for="kembali" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="tgl_kembali" placeholder="Masukkan tanggal pengembalian" name='tgl_kembali' value=<?php echo e(old('tgl_kembali',$peminjaman->tgl_kembali)); ?>>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" placeholder="Masukkan jumlah buku yang dipinjam" name='jumlah_pinjam' value=<?php echo e(old('jumlah_pinjam',$peminjaman->jumlah_pinjam)); ?>>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status Pengembalian</label>
                    <select name="status_peminjaman" id="status" class="form-select">
                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(old('status_peminjaman',$peminjaman->status_peminjaman)==$status): ?>
                                <option value="<?php echo e($status); ?>" selected><?php echo e($status); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($status); ?>"><?php echo e($status); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div>
                <div class="mb-3">
                    <label for="denda" class="form-label">Denda</label>
                    <input type="number" class="form-control" id="denda" placeholder="Masukkan Denda" name='denda' value=<?php echo e(old('denda',$peminjaman->denda)); ?>>
                </div>
                   <button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button> 
                   <a href="<?php echo e(route('peminjaman.index')); ?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i>Kembali</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus\resources\views/peminjaman/edit.blade.php ENDPATH**/ ?>