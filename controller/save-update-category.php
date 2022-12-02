<?php
include "../model/connect.php";
session_start();
if(!empty($_POST["name"])){
    $name = $_POST["name"];
$query = "UPDATE danhmuc SET name='$name' where id_danhmuc='$id_danhmuc'";
connect($query);
header("location: ../view/admin-view/category.php");
} else{
    if(isset($_POST["submit"])){
        if(empty($_POST["name"])){
            $_SESSION["errName"] = "Bạn chưa nhập tên sản phẩm";
        } else{
            $_SESSION["errName"] = "";
        }
        header("location: ../view/main-view/update-category.php");
    }
}
?>