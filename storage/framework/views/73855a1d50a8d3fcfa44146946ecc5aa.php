<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-3.7.1.min.js')); ?>"></script>

    
    <link rel="stylesheet" href="<?php echo e(asset('fontawesome/css/all.min.css')); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">VitaLibrary</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>"><i class="fa fa-home"></i>Home</a>
              </li>
              <?php if(Auth::user()->level == 'admin'): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('user.index')); ?>"><i class="fa fa-users"></i>User</a>
              </li>
              <?php endif; ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('buku.index')); ?>"><i class="fa fa-book"></i>Buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('kategori.index')); ?>"><i class="fa fa-layer-group"></i>Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('peminjaman.index')); ?>"><i class="fa fa-book-open-reader"></i>Peminjaman</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('user.password')); ?>"><i class="fa fa-key"></i>Password</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('user.logout')); ?>"><i class="fa fa-right-from-bracket"></i>Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <h1><?php echo e($title); ?></h1>
        <?php echo $__env->yieldContent('content'); ?>
      </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\perpus\resources\views/layout/app.blade.php ENDPATH**/ ?>