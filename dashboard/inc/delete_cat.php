<?php
include('coon.php');
$id = $_GET['id'];
$sql ="DELETE FROM `sectors` WHERE id = $id";
$con->query($sql);
header('location:../cta.php');
?>