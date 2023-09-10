<?php
include('inc/fun/conn.php');
$id = $_GET['id'];
$sql ="DELETE FROM `fors_add` WHERE id = $id";
$con->query($sql);
header('location:foras_add.php');
?>