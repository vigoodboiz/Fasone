<?php
include "../../model/connect.php";
    $query = "select * from danhmuc";
    $category = getAll($query);

    $id_user = $_GET["id"];
    $query2 = "select * from user where id_user=$id_user";
    $item = getOne($query2);

    $query3 = "select * from user";
    $products = getAll($query3);
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
            <h1>Update user</h1>
            <div class="form-action">
            <form action="../../controller/save-update-user.php" method="POST" enctype="multipart/form-data">
                <span>Tên người dùng</span><br>
                <input type="text" name="name" placeholder="Nhập tên người dùng" value="<?php echo $item["name"]?>"><br>
                <span style="color: red;"><?php if(!empty($_SESSION["errName"])) { echo $_SESSION["errName"]; }?></span>
                <br>
                <span>Email người dùng</span><br>
                <input type="text" name="email" placeholder="Nhập email người dùng" value="<?php echo $item["email"]?>"><br>
                <span style="color: red;"><?php if(!empty($_SESSION["errEmail"])) { echo $_SESSION["errEmail"]; }?></span>
                <br>
                <span>Avatar người dùng</span><br>
                <input type="file" name="avatar" id=""><br>
                <span style="color: red;"><?php if(!empty($_SESSION["errAvt"])) { echo $_SESSION["errAvt"]; }?></span>
                <br>
                <span>Mật khẩu người dùng</span><br>
                <input type="password" name="password" placeholder="Nhập mật khẩu người dùng" value="<?php echo $item["password"]?>"><br>
                <span style="color: red;"><?php if(!empty($_SESSION["errPassword"])) { echo $_SESSION["errPassword"]; }?></span>
                <br>
                <span>Số điện thoại người dùng</span><br>
                <input type="text" name="tell" placeholder="Nhập số điện thoại người dùng" value="<?php echo $item["tell"]?>"><br>
                <span style="color: red;"><?php if(!empty($_SESSION["errTell"])) { echo $_SESSION["errTell"]; }?></span>
                <br>
                <span>User người dùng</span><br>
                <input type="text" name="user" placeholder="Nhập user người dùng" value="<?php echo $item["user"]?>"><br>
                <span style="color: red;"><?php if(!empty($_SESSION["errUser"])) { echo $_SESSION["errUser"]; }?></span>
                <br>
                <span>Vai trò người dùng</span><br>
                <input type="radio" name="role" value="1" id="" <?php if($item["role"] == 1) {echo "checked";}?>><span>Khách hàng</span>
                <input type="radio" name="role" value="2" id="" <?php if($item["role"] == 2) {echo "checked";}?>><span>Nhân viên</span>
                <input type="radio" name="role" value="3" id="" <?php if($item["role"] == 3) {echo "checked";}?>><span>Quản lí</span>
                <br>
                <span style="color: red;"><?php if(!empty($_SESSION["errRole"])) { echo $_SESSION["errRole"]; }?></span>
                <br>
                <button name="submit">Update user</button>
            </form>
            </div>
        </main>
    </div>
    <?php  
    $_SESSION["name"] = $_SESSION["email"] = $_SESSION["avt"] = $_SESSION["password"] = $_SESSION["tell"] = $_SESSION["user"] = $_SESSION["role"] = "";
    $_SESSION["errName"] = $_SESSION["errEmail"] = $_SESSION["errAvt"] = $_SESSION["errPassword"] = $_SESSION["errTell"] = $_SESSION["errUser"] = $_SESSION["errRole"] = "";
    ?>
</body>
</html>