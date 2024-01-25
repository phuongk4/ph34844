<?php
require 'connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM sinh_vien WHERE id = '$id'";
$conn->exec($sql);
header("location:list.php");
?>