<?php
include "../model/connect.php"; 

$id_danhmuc = $_GET["id"];

        $query = "DELETE FROM danhmuc WHERE  id_danhmuc=$id_danhmuc";
        connect($query);
        header("location: ../view/admin-view/category.php");
?>