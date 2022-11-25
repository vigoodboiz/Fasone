<?php
include_once "../../model/connect.php";
include_once "../../model/products.php";
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
    <title>Document</title>
</head>
<body>
<div class="khung">
        <?php include "../../view/admin-view/aside.php"?>
        <main>
            <?php include "../../view/admin-view/header.php"?>
            <h1>Add new user</h1>
            <form action="../../controller/save-add-products.php" method="POST" enctype="multipart/form-data">
                <span>Tên sản phẩm</span><br>
                <input type="text" name="name" placeholder="Nhập tên sản phẩm">
                <span style="color: red;"><?php echo $_SESSION["errName"]?></span>
                <br>
                <span>Giá sản phẩm</span><br>
                <input type="text" name="price" placeholder="Nhập tên sản phẩm">
                <span style="color: red;"><?php echo $_SESSION["errPrice"]?></span>
                <br>
                <span>Sale sản phẩm</span><br>
                <input type="number" name="sale" min="0" placeholder="Nhập giá sale sản phẩm">
                <span style="color: red;"><?php echo $_SESSION["errSale"]?></span>
                <br>
                <span>Ảnh sản phẩm</span><br>
                <input type="file" name="avt">
                <span style="color: red;"><?php echo $_SESSION["errAvt"]?></span>
                <br>
                <span>Thông tin sản phẩm</span><br>
                <input type="text" name="thongtin" placeholder="Nhập thông tin sản phẩm">
                <span style="color: red;"><?php echo $_SESSION["errInformation"]?></span>
                <br>
                <span>Mô tả sản phẩm</span><br>
                <textarea name="mota" id="" cols="30" rows="10" placeholder="Nhập mô tả sản phẩm"></textarea>
                <span style="color: red;"><?php echo $_SESSION["errDescribe"]?></span>
                <br>
                <span>Lượt xem sản phẩm</span><br>
                <input type="text" name="view" placeholder="Nhập lượt xem sản phẩm">
                <span style="color: red;"><?php echo $_SESSION["errView"]?></span>
                <br>
                <button name="submit">Add new products</button>
            </form>
</main>
</div>
<?php  
    $_SESSION["name"] = $_SESSION["price"] = $_SESSION["avt"] = $_SESSION["sale"] = $_SESSION["thongtin"] = $_SESSION["mota"] = $_SESSION["view"] = "";
    $_SESSION["errName"] = $_SESSION["errPrice"] = $_SESSION["errAvt"] = $_SESSION["errSale"] = $_SESSION["errInformation"] = $_SESSION["errDescribe"] = $_SESSION["errView"] = "";
    ?>
</body>
</html>