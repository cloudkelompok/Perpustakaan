
<?php $__env->startSection('content'); ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <?php if(auth()->guard()->check()): ?>
      <p>Selamat Datang <b><?php echo e(Auth::user()->nama_user); ?></b></p>  
    <?php endif; ?>
    <div class="row">
      <div class="col-md-3">
        <div class="card bg-primary text-white">
          <div class="card-header">
            <i class="fa fa-users"></i> User
          </div>
          <div class="card-body">
            <h3> <?php echo e($jumlah_user); ?> data user</h3>
          </div>
          <div class="card-footer text-end">
            <a href="<?php echo e(route('user.index')); ?>" class="text-white text-decoration-none">Selengkapnya &raquo;</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-success text-white">
          <div class="card-header">
            <i class="fa fa-calculator"></i> Total Denda
          </div>
          <div class="card-body">
            <h3>Rp <?php echo e(number_format($total_denda, 0, ',', '.')); ?></h3>
          </div>
          <div class="card-footer text-end">
            <a href="<?php echo e(route('peminjaman.index')); ?>" class="text-white text-decoration-none">Selengkapnya &raquo;</a>
          </div>
        </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-danger text-white">
            <div class="card-header">
              <i class="fa fa-book"></i> Total Buku
            </div>
            <div class="card-body">
              <h3> <?php echo e($jumlah_buku); ?> </h3>
            </div>
            <div class="card-footer text-end">
              <a href="<?php echo e(route('buku.index')); ?>" class="text-white text-decoration-none">Selengkapnya &raquo;</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-info text-white">
            <div class="card-header">
              <i class="fa fa-book-open-reader"></i> Total Peminjaman
            </div>
            <div class="card-body">
              <h3> <?php echo e($jumlah_peminjaman); ?> </h3>
            </div>
            <div class="card-footer text-end">
              <a href="<?php echo e(route('peminjaman.index')); ?>" class="text-white text-decoration-none">Selengkapnya &raquo;</a>
            </div>
          </div>
        </div>    
    </div>
    <div id="container" class="my-5">
    <script>
    Highcharts.chart('container', {
      chart: {
          type: 'line'
      },
      title: {
          text: 'Grafik Peminjaman 30 Hari Terakhir'
      },
      xAxis: {
          categories: <?= json_encode($ktg) ?>
      },
      yAxis: {
          title: {
              text: 'jumlah peminjaman'
          }
      },
      plotOptions: {
          line: {
              dataLabels: {
                  enabled: true
              },
              enableMouseTracking: true
          }
      },
      series: [{
          name: 'Peminjaman',
          data: <?= json_encode($data) ?>

      }]
  });
 </script>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus - Copy\resources\views/home.blade.php ENDPATH**/ ?>