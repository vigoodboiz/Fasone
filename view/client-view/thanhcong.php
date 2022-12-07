<?php
session_start();
require "../../connect.php";
$id = $_SESSION['id_oders'];
$query2 = "select hd.id_oders,ngaymua,total,status, kh.id_khach_hang,ten_khach_hang,dia_chi,dien_thoai,email,ghichu,cthd.sanpham,soluong,price from oders hd, khach_hang kh,oder_detail cthd where hd.id_khach_hang=kh.id_khach_hang and hd.id_oders = cthd.id_oders order by hd.id_oders";
$bill_detail = $conn->query($query2)->fetchAll();
$query = "select * from oders b inner join khach_hang c where b.id_khach_hang = c.id_khach_hang and id_oders = '$id'";
$bill = $conn->query($query)->fetchAll();
$query3 = "SELECT * FROM sanpham b inner join oder_detail c where b.id_sanpham = c.id_sanpham and id_oders = '$id'";
//$query3 = "SELECT ct.name,soluong,price,soluong*price as thanhtien,sp.ten_san_pham,img from oder_detail ct,sanpham sp , where ct.id_sanpham=m.id_sanpham and id_oders='$id' ";
$ct_bill = $conn->query($query3)->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../src/css/bill_deltail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">

    <div class="nameher">
        <a href="../../index.php" style="color: black; font-size: 15px;"><h4>Trở về trang chủ</h4></a>

        <p style="text-align: center">Chúc mừng bạn đã đặt hàng thành công</p>
    </div>
    <div class="noidung">
        <?php foreach ($bill as $key2 => $value2){ ?>
        <div class="thongtin">
            <div class="onedong">
                <p>Số hóa đơn: <?php echo $value2['id_oders'] ?> </p> <p class="textright">Ngày lập hóa đơn: <?php echo $value2['ngaymua'] ?></p>
            </div>
            <p>Trị giá: <?php echo $value2['total'] ?> </p>
            <p>Họ và tên khách hàng: <?php echo $value2['ten_khach_hang'] ?></p>
            <div class="onedong">
                <p>Địa chỉ:<?php echo $value2['dia_chi'] ?>  </p> <p class="textright">Điện thoại: <?php echo $value2['dien_thoai'] ?></p> <p class="textright">Email: <?php echo $value2['email'] ?></p>
            </div>
        </div>

        <hr>
        <p>Chi tiết hóa đơn</p>
        <table style="width:100%">
            <tr>
                <th>Sản phẩm</th>
                <th>Hình</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
            </tr>
            <?php foreach ($ct_bill as $key => $value){ ?>
                <tr>
                    <td> <?php echo $value['name'] ?> </td>
                    <td> <img src="../../src/image/<?php echo $value['img'] ?>" style="width: 100px;height: 100px"> </td>
                    <td> <?php echo $value['soluong'] ?> </td>
                    <td> <?php echo $value['price'] ?>  </td>
                    <td><?php echo $value['soluong']*$value['price'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <div class="onedong2">
<!--            <button>In đơn hàng</button>-->
            <a href="../../index.php" style="text-decoration: none;color: black; font-size: 20px;text-align: center"><h4>Trở về trang chủ</h4></a>
            <p>Tổng thành tiền: <?php echo $value2['total'] ?> </p>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>

