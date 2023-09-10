<?php
include('coon.php');
$id = $_GET['id'];
$sql ="DELETE FROM `fors` WHERE id = $id";
$con->query($sql);
header('location:../frasall.php');
?>