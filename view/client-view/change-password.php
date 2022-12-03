<?php
include "../../model/connect.php";
$query = "select * from user";
$item = getOne($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/css/login.css">
    <link rel="stylesheet" href="../../src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Change password</title>
</head>
<body>
<div class="khung">
        <div class="action">
            <div class="action-img">
                <img src="https://picsum.photos/200/300" alt="">
            </div>
            <div class="action-login">
            <h1>Đổi mật khẩu</h1>
         <form action="../../controller/change-password.php" method="POST" enctype="multipart/form-data">
            <span>User name</span><br>
            <input type="text" name="name" placeholder="Enter your name" required><br>
            <span>Password</span><br>
            <input type="password" name="password" placeholder="Enter your password" required><br>
            <!-- <span style="color: red;"><?php echo $_SESSION["errPassword"]?></span> -->
            <span>Nhập lại password</span>
            <input type="password" name="rePassword" id="" placeholder="Enter your password" required><br>
            <a href=""><button name="submit">Đổi mật khẩu</button></a><br>
        </form>
            </div>
        </div>
    </div>
    <?php
    $_SESSION["password"] = $_SESSION["rePassword"] = "";
    $_SESSION["errPassword"] = $_SESSION["errRePassword"] = "";
    ?>
</body>
</html>