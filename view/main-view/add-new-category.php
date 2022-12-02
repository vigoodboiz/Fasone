<?php
include_once "../../model/connect.php";
include_once "../../model/category.php";
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
    <title>Add new category</title>
</head>
<body>
<div class="khung">
        <?php include "../../view/admin-view/aside.php"?>
        <main>
            <?php include "../../view/admin-view/header.php"?>
            <h1>Add new category</h1>
            <div class="form-action">
            <form action="../../controller/save-add-category.php" method="POST" enctype="multipart/form-data">
                <span>Tên danh mục</span><br>
                <input type="text" name="name" placeholder="Nhập tên sản phẩm"><br>
                <span style="color: red;"><?php echo $_SESSION["errName"]?></span>
                <br>
                <button name="submit">Add new category</button>
            </form>
            </div>
</main>
</div>
<?php  
    $_SESSION["name"] = "";
    $_SESSION["errName"] = "";
?>
</body>
</html>