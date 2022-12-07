<?php
include_once "../../model/connect.php";
$query = "select * from danhmuc";
$category = getAll($query);
$id_sanpham = $_GET["id"];
$query = "select * from sanpham where id_sanpham='$id_sanpham'";
$item = getOne($query);
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
    <title>Update products</title>
</head>
<body>
<div class="khung">
        <?php include "../../view/admin-view/aside.php"?>
        <main>
            <?php include "../../view/admin-view/header.php"?>
            <h1>Update products</h1>
            <div class="form-action">
            <form action="../../controller/save-update-products.php" method="POST" enctype="multipart/form-data">
                <span>Tên sản phẩm</span><br>
                <input type="text" value="<?php echo $item["id_sanpham"]?>" hidden>
                <input type="text" name="name" placeholder="Nhập tên sản phẩm" value="<?php echo $item["name"]?>"><br>
                <span style="color: red;"><?php if(!empty($_SESSION["errName"])) {echo $_SESSION["errName"];}?></span>
                <br>
                <span>Giá sản phẩm</span><br>
                <input type="text" name="price" placeholder="Nhập tên sản phẩm" value="<?php echo $item["price"]?>"><br>
                <span style="color: red;"><?php if(!empty($_SESSION["errPrice"])) {echo $_SESSION["errPrice"];}?></span>
                <br>
                <span>Sale sản phẩm</span><br>
                <input type="number" name="sale" min="0" max="10" placeholder="Nhập giá sale sản phẩm" value="<?php echo $item["sale"]?>"><br>
                <span style="color: red;"><?php if(!empty($_SESSION["errSale"])) {echo $_SESSION["errSale"];}?></span>
                <br>
                <span>Ảnh sản phẩm</span><br>
                <input type="file" name="img"><br>
                <span style="color: red;"><?php if(!empty($_SESSION["errImg"])) {echo $_SESSION["errImg"];}?></span>
                <br>
                <span>Thông tin sản phẩm</span><br>
                <input type="text" name="thongtin" placeholder="Nhập thông tin sản phẩm" value="<?php echo $item["thongtin"]?>"><br>
                <span style="color: red;"><?php if(!empty($_SESSION["errInformation"])) {echo $_SESSION["errInformation"];}?></span>
                <br>
                <span>Mô tả sản phẩm</span><br>
                <textarea name="mota" id="" cols="30" rows="10" placeholder="Nhập mô tả sản phẩm" value="<?php echo $item["mota"]?>"></textarea><br>
                <span style="color: red;"><?php if(!empty($_SESSION["errDescribe"])) {echo $_SESSION["errDescribe"];}?></span>
                <br>
                <span>Danh mục sản phẩm</span><br>
                <select name="category" id="">
                    <?php foreach($category as $value):?>
                       <option value="<?php echo $value["id_danhmuc"]?>"><?php echo $value["name"]?></option>
                    <?php endforeach?>
                </select><br>
                <button name="submit">Update products</button>
            </form>
            </div>
</main>
</div>
<?php  
    $_SESSION["name"] = $_SESSION["price"] = $_SESSION["img"] = $_SESSION["sale"] = $_SESSION["thongtin"] = $_SESSION["mota"] = "";
    $_SESSION["errName"] = $_SESSION["errPrice"] = $_SESSION["errImg"] = $_SESSION["errSale"] = $_SESSION["errInformation"] = $_SESSION["errDescribe"] = "";
    ?>
</body>
</html>