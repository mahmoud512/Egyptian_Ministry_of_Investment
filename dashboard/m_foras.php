<?php
include('inc/header.php');
include('inc/coon.php');
$sql = "SELECT * FROM fors_add";
$result = $con->query($sql);
?>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: right;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #343a40;
  color: white;
}
</style>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
  <h1>متابعة الفرص الاستثمارية</h1>
<br>
<table id="customers" dir="rtl">
  <tr>
    <th>#</th>
    <th>اسم الفرصة</th>
    <th>القطاع</th>
    <th>المحافظة</th>
    <th>حالة الحجز</th>
    <th>الغاء الحجز</th>
  </tr>
  
<?php
$x = 0;
while ($row = $result->fetch_assoc()) {
  $x++;
  ?>
  <tr>
  <td><?=$x?></td>
  <td><?php
  $id_forsa = $row['id_forsa'];
  $sqll = "SELECT * FROM `fors` WHERE id = $id_forsa";
  $resultt = $con->query($sqll);
  $roww = $resultt->fetch_assoc();
  echo $roww['name'];
  ?></td>
  <td><?php 
  $sectors = $roww['sectors'];
  $sqll = "SELECT * FROM `sectors` WHERE id = $sectors";
  $resultt = $con->query($sqll);
  $roww1 = $resultt->fetch_assoc();
  echo $roww1['sector'];
  ?>
</td>
  <td><?php 
  $governorate = $roww['governorate'];
  $sqll0 = "SELECT * FROM `governorate` WHERE id = $governorate";
  $resultt0 = $con->query($sqll0);
  $roww0 = $resultt0->fetch_assoc();
  echo $roww0['name'];
  ?></td>
  <form action="m_edit.php" method="post">
  <td>
  <select name='m_add' class="form-select" dir="ltr">
    <?php 
  $m_project = $row['m_project'];
  $sqll = "SELECT * FROM `m_project`";
  $resultt5 = $con->query($sqll);
   echo"";
  while ($row5 = $resultt5->fetch_assoc()) {
    ?>
      <option <?php
      if ($row5['id'] == $row['m_project']) {
        echo "selected";
      }
      ?> value="<?=$row5['id']?>"><?=$row5['name']?></option>
    <?php
  }
  ?></select>
  <input type="hidden" name="id" value="<?=$row['id']?>">
  </td>
  <td>
    <input type="submit" class="btn btn-primary" value=" حفظ التعديلات ">
  </td> 
  </form> 
</tr>
  <?php
}
?>

</table>
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
