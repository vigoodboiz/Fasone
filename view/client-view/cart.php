<?php
require "../../model/cart.php"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../src/css/cart.css">
</head>
<body>
<?php include '../../view/header.php'?>
<!-- Cart ---->
<h1>GIỎ HÀNG</h1>
<div class="rowmb">
    <table class="sanpham">
        <tr>
            <th>STT</th>
            <th>Hình</th>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền ($)</th>
        </tr>
        <?php showgiohang(); ?>
    </table>
</div>
<div class="luachon">
    <form action="../../model/checkout.php">
        <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
        <a href="cart.php?delcart=1"><input type="button" value="XÓA TOÀN BỘ GIỎ HÀNG"></a>
        <a href="index1.php"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
    </form>
</div>
</div>
<?php include '../../view/footer.php'?>
</body>
</html>