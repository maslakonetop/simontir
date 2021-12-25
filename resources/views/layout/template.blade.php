<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $judul }}|{{ $versi }}</title>
  <link rel="apple-touch-icon" sizes="57x57" href="/images/icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/images/icon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/images/icon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/images/icon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/images/icon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/images/icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/images/icon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/images/icon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/images/icon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/images/icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/images/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/images/icon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/images/icon/favicon-16x16.png">
  <link rel="manifest" href="/images/icon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/images/icon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini layout-fixed layout-footer-fixed layout-navbar-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <h5 class="nav-link">Selamat Datang, {{ auth()->user()->name }}</h5>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="/dist/img/user2-160x160.jpg" width="30" class="img-circle elevation-2" alt="User Image">
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <i class="far fa-id-badge"></i> Profil
                </a>
                <a href="#" class="dropdown-item">
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn"><i class="fas fa-sign-out-alt"></i> Logout</button>
                </form>
                </a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/images/logomontir.png" alt="Simontir Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light"><small>{{ $versi }}</small></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            
            <li class="nav-item menu-open">
                <a href="/" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>
            <li class="nav-header">Menu Utama</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-server"></i>
                <p>
                    Data Kegiatan
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/data" class="nav-link">
                    <i class="fas fa-university"></i>
                    <p>List Rekening</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-spinner"></i>
                <p>
                Progress
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <p>Entri Progres</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="fas fa-print"></i>
                    <p>Cetak Laporan</p>
                    </a>
                </li>              
                </ul>
            </li>
            <li class="nav-header"></li>            
            <li class="nav-header">Data Master</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-database"></i>
                <p>
                Data Master
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/rekening" class="nav-link">
                    <i class="fas fa-university"></i>
                    <p>Master Rekening</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pptk" class="nav-link">
                    <i class="far fa-id-badge"></i>
                    <p>Master PPTK</p>
                    </a>
                </li>              
                <li class="nav-item">
                    <a href="/bidang" class="nav-link">
                    <i class="fas fa-tasks"></i>
                    <p>Master Bidang</p>
                    </a>
                </li>              
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="fas fa-tasks"></i>
                    <p>Master Task</p>
                    </a>
                </li>              
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="fas fa-percent"></i>
                    <p>Master Bobot</p>
                    </a>
                </li>              
                </ul>
            </li>
            @can('admin')              
            <li class="nav-header"></li>
            <li class="nav-header">Administrator</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-users-cog"></i>
                <p>
                Menu Administrator
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/user" class="nav-link">
                    <i class="fas fa-user-check"></i>
                    <p>List Akun</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/user/create" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Registrasi Baru</p>
                    </a>
                </li>             
                </ul>
            </li>
            @endcan

            <li class="nav-header"></li>
            <li class="nav-item">
              <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-item btn text-white"><i class="fas fa-sign-out-alt"></i> Logout</button>
                </form>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      @yield('konten')
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
     
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; {{ Date('Y') }} Bappeda Kab. Cilacap</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> {{ $versi }}
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="/dist/js/adminlte.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard3.js"></script>
</body>
</html>
