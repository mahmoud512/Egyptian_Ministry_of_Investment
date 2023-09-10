<?php
include('inc/header.php');
include('inc/coon.php');
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
        <br>
        <div style="display: flex; justify-content: space-between;">
          <a href="add_cat.php?c" class="btn btn-primary  btn-lg" >اضافة قطاع جديدة</a>
          <h1> القطاعات </h1>
      </div>
      <br>
<table id="customers">
  <tr>
    <th>Action</th>
    <th>اسم القطاع</th>
    <th>#</th>
  </tr>
  <?php
    $sql ="SELECT * FROM sectors";
    $result =$con->query($sql);
    $x = 0;
    while ($row = $result->fetch_assoc()) {
      $x++;
      ?>
  <tr>
  <td>
    
    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#myModal<?=$row['id']?>">
      delete
    </button>


<!-- The Modal -->
<div class="modal" id="myModal<?=$row['id']?>">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">هل انت متاكد من حذف  : <?=$row['sector']?> </h4>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      هل انت متاكد من حذف : <?=$row['sector']?> </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <a href="inc/delete_cat.php?id=<?=$row['id']?>"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">نعم</button></a>
        
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">لا</button>
      </div>
      
    </div>
  </div>
</div>

<a href="doeditcat.php?cat=<?=$row['id']?>&c" class="btn btn-success btn-sm">Edit</a>
</td>
    <td><?=$row['sector']?></td>
    <td><?=$x?></td>
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
