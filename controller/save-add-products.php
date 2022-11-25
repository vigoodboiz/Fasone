<?php
include "../model/connect.php";
session_start();
if(!empty($_POST["name"]) && !empty($_POST["price"]) && $_FILES["avt"]["size"] != 0 && !empty($_POST["sale"]) && !empty($_POST["thongtin"]) && !empty($_POST["mota"]) && !empty($_POST["view"])){
    $name = $_POST["name"];
    $price = $_POST["price"];
    $avt = $_FILES["avt"]["name"];
    $sale = $_POST["sale"];
    $thongtin = $_POST["thongtin"];
    $mota = $_POST["mota"];
    $view = $_POST["view"];
$query = "INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `sale`, `thongtin`, `mota`, `luotxem`) VALUES ('NULL', '$name', '$price', '$img', '$sale', '$thongtin', '$mota', '$luotxem')";
connect($query);
move_uploaded_file($_FILES["avt"]["tmp_name"],"../src/image/".$_FILES["avt"]["name"]);
header("location: ../view/admin-view/products.php");
} else{
    if(isset($_POST["submit"])){
        if(empty($_POST["name"])){
            $_SESSION["errName"] = "Bạn chưa nhập tên sản phẩm";
        } else{
            $_SESSION["errName"] = "";
        }
        if(empty($_POST["price"])){
            $_SESSION["errPrice"] = "Bạn chưa nhập giá sản phẩm";
        } else{
            $_SESSION["errPrice"] = "";
        }
        if($_FILES["avt"]["size"] == 0){
            $_SESSION["errAvt"] = "Bạn chưa chọn ảnh sản phẩm";
        } else{
            $_SESSION["errAvt"] = "";
        }
        if(empty($_POST["sale"])){
            $_SESSION["errSale"] = "Bạn chưa nhập giá sale";
        } else{
            $_SESSION["errSale"] = "";
        } if(empty($_POST["thongtin"])){
            $_SESSION["errInformation"] = "Bạn chưa nhập thông tin sản phẩm";
        } else{
            $_SESSION["errInformation"] = "";
        }
        if(empty($_POST["mota"])){
            $_SESSION["errDescribe"] = "Bạn chưa nhập mô tả sản phẩm";
        } else{
            $_SESSION["errDescribe"] = "";
        }
        if(empty($_POST["view"])){
            $_SESSION["errView"] = "Bạn chưa nhập lượt xem";
        } else{
            $_SESSION["errView"] = "";
        }
        header("location: ../view/main-view/add-new-products.php");
    }
}
?>