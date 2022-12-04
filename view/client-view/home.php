
<?php  
include_once "../../model/connect.php";
include_once "../../model/products.php";
include_once "../../model/category.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../src/css/style.css">
    <link rel="stylesheet" href="../../src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

</head>
<body>
<main>
    <?php require "header.php"?>
    <div id="products" class="mb-4">
        <div class="text">
            <h1>Mặc ngay, yêu luôn</h1>
        </div>
        <div class="danhmuc">
            <!--    <select name="search-findname" id="">-->
            <!--      <option value="">Chọn danh mục</option>-->
            <!--      --><?php //foreach($category as $value): ?>
            <!--        <option value="--><?php //echo $value["id_danhmuc"]?><!--">--><?php //echo $value["name"]?><!--</option>-->
            <!--      --><?php //endforeach ?>
            <!--    </select>-->
            <form method="get">
                <a href="./home.php#products" style="margin-left: 50px; margin-right: 50px ;font-size: 25px;color: black; text-decoration: none "><strong>Tất cả</strong></a>

                <?php
                foreach ($category as $value){
                    ?>

                    <a href="./loc.php?id=<?php echo $value['id_danhmuc'] ?>#products" style="text-decoration: none;margin-right: 50px;font-size: 25px;color: black;text-align: center "><strong><?php echo $value['name'] ?></strong></a>


                <?php } ?>
            </form>
            <!--    <button name="find">Find</button>-->
        </div>
        <div class="boxsp">
            <div class="sp">
                <?php foreach($products as $value): ?>
                    <div class="item">
                        <div class="pic-item">
                            <a href="detail-products.php?id=<?php echo $value["id_sanpham"] ?>"><img src="../../src/image/<?php echo $value["img"] ?>" alt=""></a>
                        </div>
                        <h2><a href="detail-products.php?id=<?php echo $value["id_sanpham"] ?>"><?php echo $value["name"] ?></a></h2>
                        <p><?php echo $value["price"] ?>đ</p>
                        <small><?php echo $value["mota"] ?></small>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</main>
<?php
require "about.php";
require "lienhe.php";
require "footer.php";
?>

</body>
</html>
