<?php
include "../model/user.php";
foreach($user as $value){
    if(isset($_POST["submit"])){
        if(!$_POST["name"] == "" && !$_POST["password"] == ""){
            if($_POST["name"] == $value["name"] && $_POST["password"] == $value["password"]){ 
                $_SESSION["name"] = $_POST["name"]; 
                $_SESSION["avt"] = "./src/image/".$value["avt"];
                $_SESSION["role"] = $value["role"];
                if($_SESSION["role"] == 1) {
                    header("location:../index.php");  
                } else {
                    header("location:../view/admin-view/dashboard.php");
                }
            } else {
                $_SESSION["errPassword"] = "Tên đăng nhập hoặc mật khẩu không đúng";
            }
        }
    }
}
?>