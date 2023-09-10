<?php
include('inc/coon.php');
$id = $_POST['id'];
$m_add = $_POST['m_add'];
$sql ="UPDATE `fors_add` SET m_project='$m_add' WHERE id = $id";
$con->query($sql);
header('location:m_foras.php');
?>