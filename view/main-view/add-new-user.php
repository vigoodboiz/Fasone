<?php
include_once "../../model/connect.php";
include_once "../../model/user.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../src/css/main.css">
    <title>Add new user</title>
</head>
<body>
    <div class="khung">
        <?php include '../../view/admin-view/aside.php'?>
        <main>
        <?php include '../../view/admin-view/header.php'?>
        <div class="add">
            <h1>Add new user</h1>
        </div>
        <form action="../../controller/save-add-user.php" method="POST" enctype="multipart/form-data">
            <label for="">Tên người dùng</label><br>
            <input type="text" name="name" placeholder="Nhập tên người dùng"><br>
            <?php echo $_SESSION["errName"]?>
            <label for="">Ảnh đại diện</label><br>
            <input type="file" name="avt" placeholder="Nhập ảnh đại diện"><br>
            <label for="">Email người dùng</label><br>
            <input type="text" name="email" placeholder="Nhập email người dùng"><br>
            <label for="">Password</label><br>
            <input type="text" name="password" placeholder="Nhập mật khẩu"><br>
            <label for="">Nhập lại mật khẩu</label><br>
            <input type="text" name="rePassword" placeholder="Nhập lại mật khẩu"><br>
            <label for="">Nhập số điện thoại</label><br>
            <input type="number" name="tell" id="" placeholder="Nhập số điện thoại"><br>
            <label for="">Nhập địa chỉ người dùng</label><br>
            <input type="text" name="address" id="" placeholder="Nhập địa chỉ người dùng"><br>
            <label for="">Nhập vai trò người dùng</label><br>
            <input type="radio" name="role" id="" value="1"><span>Khách hàng</span>
            <input type="radio" name="role" id="" value="2"><span>Nhân viên</span>
            <input type="radio" name="role" id="" value="3"><span>Quản lí</span>
            <button name="submit">Add new user</button>
        </form>
        </main>    
    </div>
    <?php 
    $_SESSION["name"] = $_SESSION["email"] = $_SESSION["avartar"] = $_SESSION["password"] = $_SESSION["tell"] = $_SESSION["address"] = $_SESSION["role"] = "";
    $_SESSION["errName"] = $_SESSION["errEmail"] = $_SESSION["errAvartar"] = $_SESSION["errPassword"] = $_SESSION["errTell"] = $_SESSION["errAddress"] = $_SESSION["errRole"] = "";
    if(isset($_POST["submit"])){
        if(empty($_SESSION["name"])){
            $errName = "Bạn chưa nhập tên";
        } else{
            $name = $_SESSION["name"];
        }
    }
    ?>
</body>
</html>