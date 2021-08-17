<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KukuhPAA | Crud Data</title>

  <!-- Bootstrap CSS -->
  <link href="/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo e(asset('template')); ?>/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('template')); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('template')); ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light elevation-4" style="background-color: #e84118">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://cdn.antaranews.com/cache/800x533/2018/05/Logo_JNE.jpg" style="width: 40px; height:40px;" class="rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block text-white" >JNE EXPRESS</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link <?php echo e(request()->is('/')?'active' : ''); ?>">
              <i class="nav-icon fas fa-book text-white"></i>
              <p class="text-white">
                Data Resi             
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pengirim" class="nav-link <?php echo e(request()->is('mapel')?'active' : ''); ?>">
              <i class="nav-icon fas fa-people-carry text-white"></i>
              <p class="text-white">
                Pengirim             
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/penerima" class="nav-link <?php echo e(request()->is('penerima')?'active' : ''); ?>">
              <i class="nav-icon fas fa-user-tag text-white"></i>
              <p class="text-white">
                Penerima            
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/barang" class="nav-link <?php echo e(request()->is('akun')?'active' : ''); ?>">
              <i class="nav-icon fas fa-luggage-cart text-white"></i>
              <p class="text-white">
                Barang            
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pengiriman" class="nav-link <?php echo e(request()->is('pengiriman')?'active' : ''); ?>">
              <i class="nav-icon fas fa-truck text-white"></i>
              <p class="text-white">
                Pengiriman           
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>   
</div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('template')); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 5 -->
   <script src="/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('template')); ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('template')); ?>/dist/js/demo.js"></script>
</body>
</html><?php /**PATH D:\code\projekjne\resources\views/template/template.blade.php ENDPATH**/ ?>