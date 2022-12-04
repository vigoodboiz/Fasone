<?php
include_once "../model/connect.php";
    $query = "select * from user";
    $user = getOne($query);
// session_start();
if(isset($_POST["submit"])){
        if($_POST["name"] == $user["name"]){
            $password = $_POST["password"];
            $query = "UPDATE user SET password='$password' where name='$name'";
            connect($query);
            header("location: ../login.php");
        }
    } else{
        if($_POST["password"] != $_POST["rePassword"]){
            $_SESSION["errRePassword"] = "Mật khẩu bạn nhập không trùng khớp";
        } else{
            $_SESSION["errRePassword"] = "";
        }
        header("location: ../../view/client-view/change-password.php");
    }
?>