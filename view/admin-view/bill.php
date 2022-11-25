<?php
include "../../connect.php";
//include "../../model/bill.php";
$query2 = "select hd.id_oders,ngaymua,total,status, kh.id_khach_hang,ten_khach_hang,dia_chi,dien_thoai,email,ghichu,cthd.sanpham,soluong,price from oders hd, khach_hang kh,oder_detail cthd where hd.id_khach_hang=kh.id_khach_hang and hd.id_oders = cthd.id_oders order by hd.id_oders";
$bill_detail = $conn->query($query2)->fetchAll();
$query = "select * from oders b inner join khach_hang c where b.id_khach_hang = c.id_khach_hang";
$bill = $conn->query($query)->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../src/css/main.css">
    <link rel="stylesheet" href="../../src/css/category.css">
    <title>Category</title>
</head>
<body>
<div class="khung">
    <?php include 'aside.php'?>
    <main>
        <?php include 'header.php'?>
        <div class="banner">
            <div class="conten-text">
                <h1>Hóa đơn</h1>
            </div>
            <div class="conten-banner">
                <img src="../../src/image/slider-pic.png" alt="">
            </div>
        </div>
        <div class="category">
            <div class="text">
                <h1>Bill list</h1>
            </div>
            <div class="action">
<!--                <div class="product-action">-->
<!--                    <a href="../view/main-view/add-new-category.php"><button>Add new category</button></a>-->
<!--                </div>-->
                <div class="product-form">
                    <form action="category.php" method="POST">
                        <input type="text" name="findname" placeholder="Search name category">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <table border=1>
            <thead>
            <tr>
                <th>Id hóa đơn</th>
                <th>Tên khách hàng</th>
                <th>Ngày đặt hàng</th>
                <th>Trị giá</th>
                <th>Tình trạng</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($bill as $key => $value) { ?>
                <tr>
                    <td><?php echo $value['id_oders']?></td>
                    <td><?php echo $value["ten_khach_hang"]?></td>
                    <td><?php echo $value["ngaymua"]?></td>
                    <td><?php echo $value["total"]?></td>
                    <td>  <select name="ds[]" style="border: none; text-align: center; font-size: 20px">
                            <option value="1" <?php echo($value['status']==1)?"selected":"" ?> >Chưa thanh toán</option>
                            <option value="0" <?php echo($value['status']==0)?"selected":"" ?>>Đã thanh toán</option>

                        </select>  </td>
                    <td class="conten-action">
                        <a href="./bill_detail.php.php?id <?php echo $value["id_oders"]?>"><button>Detail</button></a>
                        <a href="./controller/delete-category.php?id <?php echo $value["id_oders"]?>" onclick="if (!confirm('Bạn có muốn xóa hóa đơn không?')) { return false }"><button>Delete Bill</button></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </main>
</div>
</body>
</html>
