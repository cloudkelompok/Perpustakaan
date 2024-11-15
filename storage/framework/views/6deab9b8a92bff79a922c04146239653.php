
<?php $__env->startSection('content'); ?>
    <?php if(session()->has('message')): ?>
        <p class="alert alert-info"><?php echo e(session('message')); ?></p>
    <?php endif; ?>
<div class="card mb-3 shadow shadow-lg">
    <div class="card mb-3">
        <div class="card-header">
            <form class="row row-cols-auto g-1">
                <div class="col">
                    <input class="form-control" name="q" value="<?php echo e($q); ?>" placeholder="Pencarian..."/>
                </div>
                <div class="col">
                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
                <div class="col">
                    <a class="btn btn-success" href="<?php echo e(route('peminjaman.create')); ?>"><i class="fa fa-plus"></i></a>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped m-0">
            <thead class="table-info">
                <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Nama Buku</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Kembali</th>
                    <th>Status Peminjaman</th>
                    <th>Denda</th>
                    <th>Jumlah Pinjam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php //$no = 1; ?>
            <?php $__currentLoopData = $pjm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peminjaman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($peminjaman->nama_user); ?></td>
                    <td><?php echo e($peminjaman->nama_buku); ?></td>
                    <td><?php echo e($peminjaman->tgl_pinjam); ?></td>
                    <td><?php echo e($peminjaman->tgl_kembali); ?></td>
                    <td><?php echo e($peminjaman->status_peminjaman); ?></td>
                    <td><?php echo e($peminjaman->denda); ?></td>
                    <td><?php echo e($peminjaman->jumlah_pinjam); ?></td>
                    <td>
                        <a href="<?php echo e(route('peminjaman.edit', $peminjaman)); ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                        <form method="POST" class="d-inline" action="<?php echo e(route('peminjaman.destroy', $peminjaman)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <?php if($pjm->hasPages()): ?>
        <div class="card-footer">
            <?php echo e($pjm->links()); ?>

        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus - Copy\resources\views/peminjaman/index.blade.php ENDPATH**/ ?>