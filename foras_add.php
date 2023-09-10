<?php
ob_start();
include('inc/fun/conn.php');
include('inc/dsing/header.php');
if (!isset($_SESSION['id_user'])) {
  header('location:login.php?do');
}
if (isset($_SESSION['id_user'])) {
  $user_id =$_SESSION['id_user'];
    $sql = "SELECT * FROM `fors_add` WHERE id_user = $user_id";
    $result = $con->query($sql);
  }
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

<div style="text-align: center;">
  <div class="m-2">
  <h1>متابعة الفرص الاستثمارية</h1>
<br>
<table id="customers">
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
  <td><?php 
  $m_project = $row['m_project'];
  $sqll = "SELECT * FROM `m_project` WHERE id = $m_project";
  $resultt = $con->query($sqll);
  $roww1 = $resultt->fetch_assoc();
  echo '<p class="text-danger">'.$roww1["name"]."</p>" ;
  ?></td>
  <td><button type="button" class="btn btn-sm btn-danger" style="font-size: 20px;" data-bs-toggle="modal" data-bs-target="#myModal<?=$row['id']?>">
      الغاء حجز الفرصة
    </button>


<!-- The Modal -->
<div class="modal" id="myModal<?=$row['id']?>">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">هل انت متاكد من الغاء حجز   : <?=$roww['name']?> </h4>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      هل انت متاكد من الغاء حجز  : <?=$roww['name']?> </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
      <a href="delete_add_foras.php?id=<?=$row['id']?>"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">نعم</button></a>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">لا</button>
      </div>
      
    </div>
  </div>
</div></td>  
</tr>
  <?php
}
?>

</table>

  </div>
</div>
<?php
ob_end_flush();
?>