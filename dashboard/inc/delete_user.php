<?php
include('coon.php');
$id = $_GET['id'];
$query = "DELETE FROM `fors_add` WHERE id_user = $id";
$con->query($query);
$sql ="DELETE FROM `user` WHERE id = $id";
$con->query($sql);
header('location:../user.php');
?>