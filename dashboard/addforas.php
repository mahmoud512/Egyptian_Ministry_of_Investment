<?php
ob_start();
include('inc/header.php');
include('inc/coon.php');
?>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['name'];
  $prise = $_POST['prise'];
  $sectors = $_POST['sectors'];
  $governorate = $_POST['governorate'];
  $msaha = $_POST['msaha'];
  $timelive = $_POST['timelive'];
  $num_partners = $_POST['num_partners'];
  $capital = $_POST['capital'];
  $des = $_POST['des'];
  $img_name = $_FILES['photo']['name'];
  $img_size = $_FILES['photo']['size'];
  $img_tmp = $_FILES['photo']['tmp_name'];

  $type_img = ["png" , "jpg" , "gif" , "jpeg", "webp"];
  $explode_name_img = explode(".", $img_name);
  $explode_name_img_end = end($explode_name_img);
  if (!in_array($explode_name_img_end , $type_img)) {
    $error[] = 'the type img is not incorrect';
  }
  if ($img_size > 5000000) {
    $error[] = 'the image size is large';
  }
  
  if (empty($error)) {
    $new_img_name = time() .rand(1 , 10000000) . $img_name ; 
    move_uploaded_file($img_tmp , "dist/img/foras/$new_img_name");
    $sql ="INSERT INTO fors( name, prise, sectors, governorate, msaha, timelive, num_partners, capital, des, caver) VALUES 
    ('$name','$prise','$sectors','$governorate','$msaha','$timelive','$num_partners','$capital','$des','$new_img_name')";
    $con->query($sql);
    header('location:frasall.php');
  }

}
?>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" style="text-align: right; direction: rtl;">
      <h1 style="text-align: center;">اضافة فرصة استثمارية</h1>
<hr>
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
  <div class="mb-3 col ">
    <label for="name" class="form-label">اسم المشروع :</label>
    <input type="text" required class="form-control" id="name" placeholder="اسم المشروع" name="name">
  </div>
  <div class="mb-3 col">
    <label for="prise" class="form-label">تكلفة المشروع :</label>
    <input type="number" required class="form-control" id="prise" placeholder="تكلفة المشروع" name="prise">
  </div>
  </div>
  <div class="row">
  <div class="col mb-3">
    <label for="sectors" class="form-label"> القطاع :</label>
    <select name="sectors" required id="sectors" class="form-control">
      <?php
        $sql = "SELECT * FROM sectors";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
          ?>
          <option value="<?=$row['id']?>"><?=$row['sector']?></option>
          <?php
        }
      ?>
    </select>
  </div>
  <div class="col mb-3">
    <label for="governorate" class="form-label"> المحافظة :</label>
    <select name="governorate" required id="governorate" class="form-control">
      <?php
        $sql = "SELECT * FROM governorate";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
          ?>
          <option value="<?=$row['id']?>"><?=$row['name']?></option>
          <?php
        }
      ?>
    </select>
  </div>
  </div>
  <div class="row">
    <div class="col mb-3">
    <label for="msaha" class="form-label"> مساحة المشروع :</label>
      <input type="number" min="1" required class="form-control" placeholder="ادخل مساحة المشروع" name="msaha">
    </div>
    <div class="col mb-3">
    <label for="timelive" class="form-label"> سنوات اقامة المستثمر :</label>
      <input type="number" id="timelive" required class="form-control" placeholder=" عدد سنوات اقامة المستثمر" name="timelive">
    </div>
  </div>
  <div class="row">
    <div class="col mb-3">
    <label for="num_partners" class="form-label"> عدد الشركاء :</label>
      <input type="number" min="1" required class="form-control" placeholder=" عدد الشركاء " id="num_partners" name="num_partners">
    </div>
    <div class="col mb-3">
    <label for="capital" class="form-label"> رأس المال :</label>
    <select name="capital" required id="capital" class="form-control">
      <?php
        $sql = "SELECT * FROM capital";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
          ?>
          <option value="<?=$row['id']?>"><?=$row['name']?></option>
          <?php
        }
      ?>
    </select>
  </div>
  <div class="mb-3">
  <label for="cat" class="form-label"> اختر صورة المشروع :</label>
  <input type="file" required class="form-control" id="photo" name="photo">
  </div>
  <div class="mb-3">
	<textarea name="des" required rows="4" cols="80"></textarea>
 <script>
 CKEDITOR.replace('des');
</script>
  </div>

  <input type="submit" class="btn btn-primary" value="Submit">
</form> 
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