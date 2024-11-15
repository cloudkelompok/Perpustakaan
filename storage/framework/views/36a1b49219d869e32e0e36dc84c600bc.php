
<?php $__env->startSection('content'); ?>
<?php if(session()->has('message')): ?>
      <p class="alert alert-info"><?php echo e(session('message')); ?></p>
<?php endif; ?>
      <div class="card mb-3">
          <div class="card-header">
              <form class="row row-cols-auto g-1">
                  <div class="col">
                      <input class="form-control" name="q" value="<?php echo e($q); ?>" placeholder="Pencarian..."/>
                  </div>
                  <div class="col">
                      <button class="btn btn-success"><i class="fa fa-search"></i></button>
                  </div>
                  <div class="col">
                      <a class="btn btn-primary" href="<?php echo e(route('user.create')); ?>"><i class="fa fa-plus"></i></a>
                  </div>
              </form>
          </div>
    <div class="table-responsive">  
        <table class="table table-hover table-bordered table-striped m-0">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Telepon</th>
                <th scope="col">Level</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($user->nama_user); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->username); ?></td>
                <td><?php echo e($user->no_tlp); ?></td>
                <td><?php echo e($user->level); ?></td>
                <td>
                  <a href="<?php echo e(route('user.edit', $user)); ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                  <form action="<?php echo e(route('user.destroy', $user)); ?>" method="post" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i></button>
                  </form>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
    </div>
    <?php if($users->hasPages()): ?>
        <div class="card-footer">
          <?php echo e($users->links()); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus - Copy\resources\views/user/index.blade.php ENDPATH**/ ?>