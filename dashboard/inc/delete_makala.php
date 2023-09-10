<?php
include('coon.php');
$id = $_GET['id'];
$sql ="DELETE FROM `mkala` WHERE id = $id";
$con->query($sql);
header('location:../makala.php?m');
?>