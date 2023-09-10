<?php
session_start();
if (!isset($_SESSION['logn_user'])) {
  header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Dashboard</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href=" plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href=" plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3" style="direction: rtl; text-align: center;">
        <div class="info">
          <a href="#" class="d-block"> مرحبا :  <?php echo $_SESSION['name_user'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="index.php?d" class="nav-link <?php
                if (isset($_GET['d'])) {
                  echo "active";
                }?>">
                  <i class="nav-icon ion ion-home"></i>
                  <p>
                    الريئسية
                  </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="frasall.php?f" class="nav-link <?php
                if (isset($_GET['f'])) {
                  echo "active";
                }?>">
                <i class="nav-icon ion ion-bookmark"></i>
                  <p>
                    الفرص الاستثمارية
                  </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="m_foras.php?fa" class="nav-link <?php
                if (isset($_GET['fa'])) {
                  echo "active";
                }?>">
                <i class="nav-icon ion ion-bookmark"></i>
                  <p>
                    الفرص الاستثماريةالمحجوزه
                  </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="cta.php?c" class="nav-link <?php
                if (isset($_GET['c'])) {
                  echo "active";
                }?>">
                <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    القطاعات
                  </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="makala.php?m" class="nav-link <?php
                if (isset($_GET['m'])) {
                  echo "active";
                }?>">
                <i class="nav-icon ion ion-clipboard"></i>
                  <p>
                    المقالات
                  </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="user.php?u" class="nav-link <?php
                if (isset($_GET['u'])) {
                  echo "active";
                }?>">
                <i class="nav-icon ion ion-person"></i>
                  <p>
                    المستخدمين
                  </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="inc/logout.php" class="nav-link <?php
                if (isset($_GET['u'])) {
                  echo "active";
                }?>">
                <i class="nav-icon ion ion-person"></i>
                  <p>
                    تسجيل الخروج
                  </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>