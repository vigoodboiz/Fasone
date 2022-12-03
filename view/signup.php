<?php
include_once "../model/connect.php";
include_once "../controller/signup.php";
$query = "select * from user";
$user = getAll($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/login.css">
    <title>Signup</title>
</head>
<body>
    <div class="khung">
        <div class="action">
            <div class="action-img">
            <img src="https://picsum.photos/200/300" alt="">
            </div>
            <div class="action-login">
            <h1>Sign up</h1>
        <form action="../controller/signup.php" method="POST" enctype="multipart/form-data">
                <span>User name</span><br>
                <input type="text" name="name" placeholder="Enter your name" required><br>
                <br>
                <span>User email</span><br>
                <input type="text" name="email" placeholder="Enter your email" required><br>
                <br>
                <span>Avatar người dùng</span><br>
                <input type="file" name="avt">
                <br>
                <span>User password</span><br>
                <input type="password" name="password" placeholder="Enter your password" required><br>
                <br>
                <span>User repassword</span><br>
                <input type="password" name="rePassword" placeholder="Enter your password again" required><br>
                <br>
                <span>Số điện thoại người dùng</span><br>
                <input type="text" name="tell" placeholder="Nhập số điện thoại người dùng"><br>
                <br>
                <span>User người dùng</span><br>
                <input type="text" name="user" placeholder="Nhập user người dùng"><br>
                <br>
                <a href="#"><button name="submit">Sign up</button></a>
        </form>
            </div>
        </div>
    </div>
</body>
</html>