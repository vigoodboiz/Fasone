<?php
require "../../connect.php";
$id = $_GET['id'];
$ds = $_POST['ds'];
$update = "UPDATE `oders` SET `status` = '$ds' WHERE `oders`.`id_oders` = '$id'";
$rows = $conn->exec($update);
header("location:./bill.php");
//if(isset($_POST['capnhat'])&& isset($_POST["ds"]) && isset($_POST["id_hoadon"])){
//    $ds = $_POST['ds'];
//    $id = $_POST['id_hoadon'];
//    $update = "UPDATE `oders` SET `status` = '$ds' WHERE `oders`.`id_oders` = '$id'";
//    $rows = $conn->exec($update);
//    header("location:./bill.php");
//}
?>
