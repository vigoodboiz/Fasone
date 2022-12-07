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
    <link rel="stylesheet" href="../../src/css/style.css">
    <link rel="stylesheet" href="./src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="information">
        <p><img src="https://img.icons8.com/material/24/null/clock--v1.png"/> Giao hàng miễn phí và nhanh chóng</p>
        <p><img src="https://img.icons8.com/ios-filled/50/null/shopping-mall.png"/> Miễn phí vận chuyển trên tất cả các đơn đặt hàng </p>
        <p><img src="https://img.icons8.com/material/24/null/new-post--v1.png"/> vchientaki@gmail.com</p>

    </div>
    <hr>
    <div class="header">
        <div class="function">
            <a href="../../index.php"><img src="../../src/image/logo.png" alt="Logo"></a>
            <div class="search">
                <form action="search" >
                    <form action="">
                        <div class="search_box">
                            <input type="text" class="input" placeholder="search...">
                            <button>Tìm kiếm</button>
                        </div>
                    </form>
                </form>
            </div>
            <div class="lg-lout">

                <a href="./detail-user.php?id=<?php echo $item["id_user"]?>"><img src="https://img.icons8.com/material/24/null/user-male-circle--v1.png"/></a>
                <a href="../../controller/logout.php"><img src="https://img.icons8.com/material/24/null/exit.png"/></a>
            </div>
        </div>
<!--        <div class="menu">-->
<!--            <div class="menus">-->
<!--                <a href="../../index.php">TRANG CHỦ</a>-->
<!--                <a href="#products">SẢN PHẨM</a>-->
<!--                <a href="#about">GIỚI THIỆU</a>-->
<!--                <a href="#lienhe">LIÊN HỆ</a>-->
<!--            </div>-->
<!--            <div class="giohang">-->
<!--                <a href="./cart.php"><img src="https://img.icons8.com/ios-filled/50/null/shopping-mall.png"/>   GIỎ HÀNG</a>-->
<!--            </div>-->
<!--        </div>-->
    </div>

</header>


<!-- Cart ---->
<br><br><br>
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
<br><br><br>
<?php require "./footer.php" ?>
</body>
</html>