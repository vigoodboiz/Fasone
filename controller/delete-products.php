<?php
include "../model/connect.php"; 

$id_sanpham = $_GET["id_sanpham"];

        $query = "DELETE FROM products WHERE  id_sanpham=$id_sanpham";
        connect($query);
        header("location: ../view/admin-view/products.php");
?>