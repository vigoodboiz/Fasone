<?php
session_start();
if(empty($_SESSION)){
    header("location: ../login.php");
}
$id_sanpham = $_GET["id"];
    $query = "select * from sanpham where id_sanpham=$id_sanpham";
    $products = getOne($query);
?>