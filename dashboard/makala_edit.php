<?php
ob_start();
include('inc/header.php');
include('inc/coon.php');
?>

<?php
$id_m = $_GET['id_m'];
$id_user = $_SESSION['id_user'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['name'];
  $des = $_POST['des'];
    $sql ="UPDATE `mkala` SET title='$name', des='$des',`id_user`='$id_user' WHERE id = $id_m";
    $con->query($sql);
    header('location:makala.php');
  }
?>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" style="text-align: right; direction: rtl;">
      <h1 style="text-align: center;">اضافة مقالة جديدة</h1>
<hr>
<?php
$sql ="SELECT * FROM mkala WHERE id= $id_m";
$result =$con->query($sql);
while ($row4 = $result->fetch_assoc()) {
?>
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
  <div class="mb-3 col ">
    <label for="name" class="form-label">عنوان المقالة :</label>
    <input type="text" value="<?=$row4['title']?>" required class="form-control" id="name" placeholder="عنوان المقالة" name="name">
  </div>
<div class="mb-3">
    <label for="cat" class="form-label"> محتوي المقالة :</label>
	<textarea name="des" required rows="4" cols="80">
  <?=$row4['des']?>
  </textarea>
 <script>
 CKEDITOR.replace('des');
</script>
  </div>

  <input type="submit" class="btn btn-primary" value="Submit">
</form> 
<?php } ?>
          </div>
          <!-- /.col -->
        </section>
        </div>
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
<script src=" plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src=" plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src=" plugins/datatables/jquery.dataTables.min.js"></script>
<script src=" plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src=" plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src=" plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
</script>
</body>
</html>
<?php ob_end_flush(); ?>