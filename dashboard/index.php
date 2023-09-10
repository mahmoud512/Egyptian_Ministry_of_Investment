<?php
include('inc/header.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p> عدد الفرص الاستثمارية </p>
              </div>
              <div class="icon">
              <i class="nav-icon ion ion-bookmark"></i>
              </div>
              <a href="frasall.php" class="small-box-footer"> عرض التفاصيل <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>6</h3>

                <p>عدد القطاعات </p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-chart-pie"></i>
              </div>
              <a href="cta.php" class="small-box-footer"> عرض التفاصيل  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p> عدد مستخدمي النظام </p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="user.php" class="small-box-footer"> عرض التفاصيل  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>44</h3>

                <p> عدد المقالات </p>
              </div>
              <div class="icon">
              <i class="nav-icon ion ion-clipboard"></i>
              </div>
              <a href="makala.php" class="small-box-footer"> عرض التفاصيل  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row" style="direction: rtl; text-align: right;">
          <!-- col -->
          <section class="col-lg-12 connectedSortable">
              <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline" >
              <div class="card-header" >
                <h3 class="card-title" style="text-align: right; width: 100%;" >
                  <i class="fas fa-edit"></i>
                  اختصارات 
                </h3>
              </div>
              <div class="card-body pad table-responsive">
                <table class="table table-bordered text-center">
                  <tbody><tr>
                    <th>الفرص الاستثمارية</th>
                    <th>القطاعات</th>
                    <th>المقالات</th>
                  </tr>
                  <tr>
                    <td>
                      <a href="frasall.php?f" class="btn btn-block btn-primary btn-lg"> عضر جميع الفرص الاستثمارية </a> 
                    </td>
                    <td>
                      <a href="cta.php?c" class="btn btn-block btn-primary btn-lg">عرض جميع القطاعات</a>
                    </td>
                    <td>
                      <a href="makala.php?m" class="btn btn-block btn-primary btn-lg">عرض جميع المقالات</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="addforas.php?f" class="btn btn-block btn-success btn-lg"> اضافة فرصة استثمارية</a>
                    </td>
                    <td>
                      <a href="add_cat.php" class="btn btn-block btn-success btn-lg">اضافة قطاع</a>
                    </td>
                    <td>
                      <a href="makala_add.php" class="btn btn-block btn-success btn-lg">اضافة مقالة</a>
                    </td>
                  </tr>
                </tbody></table>
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
          </section>
          <!-- / col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022-2023 <a href="#">وزارة الاستثمار المصري</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
