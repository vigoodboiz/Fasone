<?php
include_once "../../model/connect.php";
$id_danhmuc = $_GET["id"];
$query = "select * from danhmuc where id_danhmuc='$id_danhmuc'";
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
    <title>Update category</title>
</head>
<body>
<div class="khung">
        <?php include "../../view/admin-view/aside.php"?>
        <main>
            <?php include "../../view/admin-view/header.php"?>
            <h1>Update products</h1>
            <div class="form-action">
            <form action="../../controller/save-update-category.php" method="POST" enctype="multipart/form-data">
                <span>Tên sản phẩm</span><br>
                <input type="text" value="<?php echo $item["id_danhmuc"]?>" hidden>
                <input type="text" name="name" placeholder="Nhập tên danh mục" value="<?php echo $item["name"]?>"><br>
                <span style="color: red;"><?php if(!empty($_SESSION["errName"])) {echo $_SESSION["errName"];}?></span>
                <br>
                <button name="submit">Update category</button>
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