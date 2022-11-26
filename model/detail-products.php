<?php
$id = $_GET["id"];
    $query = "select * from sanpham where id=$id";
    $products = getOne($query);
?>