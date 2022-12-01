<?php
include "../model/connect.php";
session_start();
if(!empty($_POST["name"]) && !empty($_POST["email"]) && $_FILES["avatar"]["size"] != 0 && !empty($_POST["password"]) && !empty($_POST["rePassword"]) && !empty($_POST["tell"]) && !empty($_POST["user"]) && !empty($_POST["role"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $avt = $_FILES["avatar"]["name"];
    $password = $_POST["password"];
    $tell = $_POST["tell"];
    $user = $_POST["user"];
    $role = $_POST["role"];
$query = "INSERT INTO `user` (`id_user`, `name`, `email`, `user`, `password`, `tell`, `avt`, `role`) VALUES ('NULL', '$name', '$email', '$user', '$password', '$tell', '$avt', $role)";
connect($query);
move_uploaded_file($_FILES["avatar"]["tmp_name"],"../src/image/".$_FILES["avatar"]["name"]);
header("location: ../view/admin-view/user.php");
} else{
    if(isset($_POST["submit"])){
        if(empty($_POST["name"])){
            $_SESSION["errName"] = "Bạn chưa nhập tên";
        } else{
            $_SESSION["errName"] = "";
        }
        if(empty($_POST["email"])){
            $_SESSION["errEmail"] = "Bạn chưa nhập email";
        } else{
            $_SESSION["errEmail"] = "";
        }
        if($_FILES["avatar"]["size"] == 0){
            $_SESSION["errAvt"] = "Bạn chưa chọn avatar";
        } else{
            $_SESSION["errAvt"] = "";
        }
        if(empty($_POST["password"])){
            $_SESSION["errPassword"] = "Bạn chưa nhập mật khẩu";
        } else{
            $_SESSION["errPassword"] = "";
        }
        if(empty($_POST["rePassword"])){
            $_SESSION["errRePassword"] = "Bạn chưa nhập lại mật khẩu";
        } 
        else if($_POST["password"] != $_POST["rePassword"]){
            $_SESSION["errRePassword"] = "Mật khẩu bạn nhập không trùng khớp";
        } else{
            $_SESSION["errRePassword"] = "";
        }
        if(empty($_POST["tell"])){
            $_SESSION["errTell"] = "Bạn chưa nhập số điện thoại";
        } else{
            $_SESSION["errTell"] = "";
        }
        if(empty($_POST["user"])){
            $_SESSION["errUser"] = "Bạn chưa nhập địa chỉ";
        } else{
            $_SESSION["errAddress"] = "";
        }
        if(empty($_POST["role"])){
            $_SESSION["errRole"] = "Bạn chưa chọn vai trò";
        } else{
            $_SESSION["errRole"] = "";
        }
        header("location: ../view/main-view/add-new-user.php");
    }
}
?>