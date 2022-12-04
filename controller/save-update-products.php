<?php
include "../model/connect.php";
session_start();
if(!empty($_POST["name"]) && !empty($_POST["price"]) && $_FILES["img"]["size"] != 0 && !empty($_POST["sale"]) && !empty($_POST["thongtin"]) && !empty($_POST["mota"])){
    $name = $_POST["name"];
    $price = $_POST["price"];
    $oldImage = $_POST["oldImage"];
    $id_danhmuc = $_POST['category'];
    $img;
    if($_FILES["img"]["name"] == ""){
        $img = $oldImage;
    }else{
        $img = $_FILES["img"]["name"];
    }
    $sale = $_POST["sale"];
    $thongtin = $_POST["thongtin"];
    $mota = $_POST["mota"];
$query = "UPDATE sanpham SET name='$name'; price='$price'; img='$img'; sale='$sale'; thongtin='$thongtin'; mota='$mota';id_danhmuc='$id_danhmuc' where id_sanpham='$id_sanpham'";
connect($query);
move_uploaded_file($_FILES["img"]["tmp_name"],"../src/image/".$_FILES["img"]["name"]);
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
        if($_FILES["img"]["size"] == 0){
            $_SESSION["errImg"] = "Bạn chưa chọn ảnh sản phẩm";
        } else{
            $_SESSION["errImg"] = "";
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
        header("location: ../view/main-view/update-products.php");
    }
}
?>