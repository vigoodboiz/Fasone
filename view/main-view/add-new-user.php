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
    <link rel="stylesheet" href="../../src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../src/css/main.css">
    <link rel="stylesheet" href="../../src/css/form.css">
    <title>Add new</title>
</head>
<body>
    <div class="khung">
        <?php include "../../view/admin-view/aside.php"?>
        <main>
            <?php include "../../view/admin-view/header.php"?>
            <h1>Add new user</h1>
            <div class="form-action">
            <form action="../../controller/save-add-user.php" method="POST" enctype="multipart/form-data">
                <span>Tên người dùng</span><br>
                <input type="text" name="name" placeholder="Nhập tên người dùng"><br>
                <span style="color: red;"><?php echo $_SESSION["errName"]?></span>
                <br>
                <span>Email người dùng</span><br>
                <input type="text" name="email" placeholder="Nhập email người dùng"><br>
                <span style="color: red;"><?php echo $_SESSION["errEmail"]?></span>
                <br>
                <span>Avatar người dùng</span><br>
                <input type="file" name="avatar" id=""><br>
                <span style="color: red;"><?php echo $_SESSION["errAvt"]?></span>
                <br>
                <span>Mật khẩu người dùng</span><br>
                <input type="password" name="password" placeholder="Nhập mật khẩu người dùng"><br>
                <span style="color: red;"><?php echo $_SESSION["errPassword"]?></span>
                <br>
                <span>Nhập lại mật khẩu</span><br>
                <input type="password" name="rePassword" placeholder="Nhập lại mật khẩu người dùng"><br>
                <span style="color: red;"><?php echo $_SESSION["errRePassword"]?></span>
                <br>
                <span>Số điện thoại người dùng</span><br>
                <input type="text" name="tell" placeholder="Nhập số điện thoại người dùng"><br>
                <span style="color: red;"><?php echo $_SESSION["errTell"]?></span>
                <br>
                <span>User người dùng</span><br>
                <input type="text" name="user" placeholder="Nhập user người dùng"><br>
                <span style="color: red;"><?php echo $_SESSION["errUser"]?></span>
                <br>
                <span>Vai trò người dùng</span><br>
                <input type="radio" name="role" value="1" id=""><span>Khách hàng</span>
                <input type="radio" name="role" value="2" id=""><span>Nhân viên</span>
                <input type="radio" name="role" value="3" id=""><span>Quản lí</span>
                <br>
                <span style="color: red;"><?php echo $_SESSION["errRole"]?></span>
                <br>
                <button name="submit">Add new user</button>
            </form>
            </div>
        </main>
    </div>
    <?php  
    $_SESSION["name"] = $_SESSION["email"] = $_SESSION["avt"] = $_SESSION["password"] = $_SESSION["rePassword"] = $_SESSION["tell"] = $_SESSION["user"] = $_SESSION["role"] = "";
    $_SESSION["errName"] = $_SESSION["errEmail"] = $_SESSION["errAvt"] = $_SESSION["errPassword"] = $_SESSION["errRePassword"] = $_SESSION["errTell"] = $_SESSION["errUser"] = $_SESSION["errRole"] = "";
    ?>
</body>
</html>