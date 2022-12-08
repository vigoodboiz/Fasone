<?php
require "../../connect.php";
    include_once '../../model/connect.php';
    include_once '../../model/detail-products.php';
require "../../model/comment.php";
    $id = $_GET['id'];
$sql = "select * from `sanpham` WHERE `sanpham`.`id_sanpham` = '$id'";
$row = $conn->query($sql)->fetchAll();
$dsbl = loadall_binhluan();
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
	<title>Chi tiết sản phẩm</title>
</head>
<body>
    <?php include 'header.php'?>
<div class="detail-product">
<!--        <h1 style="margin-left: 30px;">Thông tin sản phẩm</h1>-->
        <br>
        <div class="info">
            <div class="picture">
                <img src="../../src/image/<?php echo $products["img"]?>" alt="<?php echo $products["name"]?>">
                <p class="description" style="font-size: 15px; color: #5D5D5D; text-align: left; margin-left: 20px; margin-bottom: 20px; margin-top: 30px">Thông tin sản phẩm: <?php echo $products["thongtin"]?></p>
            </div>
            <div class="infomation">
                    <div class="more-info">
                    <h1 class="nameProduct"><?php echo $products["name"]?></h1>


                </div>

                <p class="priceProduct" style="color: red"><?php echo $products["price"]?> Vnd</p>
<!--                <h2 class="saleOff">saleOff: <strong style="color: red;">--><?php //echo $products["sale"]?><!-- %</strong></h2>-->
<!--                    <br>-->
                <?php foreach ($row as $key => $value){ ?>
                    <form method="POST" action="./cart.php?action=add&id=<?php echo $value["id_sanpham"]; ?>">
                        <div class="size">

                            <?php
                            $sql2 = "select * from classify where `classify`.`id_sanpham`='$id'";
                            $row2 = $conn->query($sql2)->fetchAll();
                             foreach ($row2 as $key2 => $value2){ ?>
                            <label class="option-select_item m">
                                <div class="option-select_inner">
                                    <input type="radio" name="size" value="<?php echo $value2['size'] ?>" data-title="<?php echo $value2['size'] ?>">
                                    <span class="checkmark"><?php echo $value2['size'] ?></span>

                                </div>
                            </label>
                            <?php } ?>

                        </div>


                        <input type="hidden" name="hinh" value="<?php echo $value['img']; ?>">
                        <input type="hidden" name="name" value="<?php echo $value["name"]; ?>" />
                        <input type="hidden" name="gia" value="<?php echo $value['price'] ?>" />
                        <input type="hidden" name="id" value="<?php echo $value["id_sanpham"]; ?>">
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <input id="submit"  type="submit" name="addcart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                    </form>
                <?php } ?>
                <br><h4>Mô tả sản phẩm</h4>
                    <p class="mota">Mo ta: <?php echo $products["mota"]?></p>
            </div>
        </div>
    <div class="mt-14 ml-5">
        <h2 class="text-2xl">Bình luận</h2><br>
        <?php
        foreach ($dsbl as $bl) {
            extract($bl);
            echo '<h2 class="text-red-500 text-xl">Name: ' .$name.'</h2>';
            echo '<span class="text-xs">Ngày bình luận: ' .$ngaybinhluan.'</span>';
            echo '<p>Nội dung:'.$noidung.'</p>';
        }
        ?>

    </div>
    <iframe src="../../controller/comment.php?id_sanpham=<?=$_GET['id'] ?>" width="100%" height="120px" frameborder="0"></iframe>
</div>

    </div>
    <br><hr>
    <?php include 'footer.php' ?>
</body>
</html>