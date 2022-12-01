<?php
include_once "../model/connect.php";
session_start();
if(isset($_POST["submit"])){
    // if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_FILES["avt"]["name"]) != 0 && !empty($_POST["password"]) !empty($_POST ["rePassword"]) && !empty($_POST["tell"]) && !empty($_POST["user"])){
        if($_POST["password"] == $_POST["rePassword"]){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $avt = $_FILES["avt"]["name"];
            $password = $_POST["password"];
            $tell = $_POST["tell"];
            $user = $_POST["user"];
            $role = 1;
            $query = "insert into user(id_user,name,email,avt,password,tell,user,role) values('NULL', '$name', '$email', '$avt', '$password', '$tell', '$user', $role)";
            connect($query);
            move_uploaded_file($_FILES["avt"]["tmp_name"],"../src/image/".$_FILES["avt"]["name"]);
            header("location: ../view/login.php");
        } else{
            $_SESSION["err"] = "Mật khẩu không trùng khớp";
            header("location: ./view/signup.php");
        }
    }
?>