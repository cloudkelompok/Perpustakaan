
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
                    <a class="btn btn-success" href="<?php echo e(route('kategori.create')); ?>"><i class="fa fa-plus"></i></a>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped m-0">
            <thead class="table-info">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php //$no = 1; ?>
            <?php $__currentLoopData = $ktg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($kategori->nama_kategori); ?></td>
                    <td>
                        <a class="btn btn-sm btn-warning" href=" <?php echo e(route('kategori.edit', $kategori)); ?>"><i class="fa fa-edit"></i></a>
                        <form method="POST" class="d-inline" action="<?php echo e(route('kategori.destroy', $kategori)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <?php if($ktg->hasPages()): ?>
        <div class="card-footer">
            <?php echo e($ktg->links()); ?>

        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus - Copy\resources\views/kategori/index.blade.php ENDPATH**/ ?>