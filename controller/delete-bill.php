<?php
require "../connect.php";
$id = $_GET['id'];
$query = "DELETE FROM `oders` WHERE `oders`.`id_oders` = '$id'";
$row = $conn->exec($query);
header("location:../view/admin-view/bill.php");
?>