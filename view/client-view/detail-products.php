<?php
    include_once '../../model/connect.php';
    include_once '../../model/detail-products.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/css/style.css">
    <link rel="stylesheet" href="../../src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
	<title>Document</title>
</head>
<body>
    <?php include '../../view/header.php'?>
<div class="detail-product">
        <h1 style="margin-left: 20px;">Thông tin sản phẩm</h1>
        <br>
        <div class="info">
            <div class="picture">
                <img src="../../src/image/<?php echo $products["img"]?>" alt="<?php echo $products["name"]?>">
            </div>
            <div class="infomation">
                <h1 class="nameProduct"><?php echo $products["name"]?></h1>
                <p class="priceProduct"><?php echo $products["price"]?> $</p>
                <h2 class="saleOff">saleOff: <strong style="color: red;"><?php echo $products["sale"]?> %</strong></h2>
                    <br>
                    <button class="addItem">Add to cart</button>
            </div>
        </div>
        <div class="more-info">
            <h1>Mô tả sản phẩm</h1>
            <p class="mota"><?php echo $products["mota"]?></p>
            <p class="description">Thông tin sản phẩm: <?php echo $products["thongtin"]?></p>
        </div>
    </div>
    <br><hr>
    <?php include '../../view/footer.php'?>
</body>
</html>