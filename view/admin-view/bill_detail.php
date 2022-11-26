<?php
require "../../connect.php";
$query2 = "select hd.id_oders,ngaymua,total,status, kh.id_khach_hang,ten_khach_hang,dia_chi,dien_thoai,email,ghichu,cthd.sanpham,soluong,price from oders hd, khach_hang kh,oder_detail cthd where hd.id_khach_hang=kh.id_khach_hang and hd.id_oders = cthd.id_oders order by hd.id_oders";
$bill_detail = $conn->query($query2)->fetchAll();
$query = "select * from oders b inner join khach_hang c where b.id_khach_hang = c.id_khach_hang";
$bill = $conn->query($query)->fetchAll();
$query3 = "SELECT ct.*,ten_san_pham,hinh from oder_detail ct,sanpham m where ct.id_sanpham=m.id_sanpham and id_oders=? "
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
        <p>Hóa đơn bán hàng</p>
    </div>
    <div class="noidung">
        <div class="thongtin">
            <div class="onedong">
                <p>Số hóa đơn: </p> <p class="textright">Ngày lập hóa đơn: </p>
            </div>
            <p>Trị giá: </p>
            <p>Họ và tên khách hàng: </p>
            <div class="onedong">
                <p>Địa chỉ: </p> <p class="textright">Điện thoại: </p> <p class="textright">Email: </p>
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
            <tr>
                <td>quần áo</td>
                <td>ảnh</td>
                <td>1</td>
                <td>2000 Đồng </td>
                <td>2000 Đồng</td>
            </tr>
        </table>
        <div class="onedong2">
            <button>In đơn hàng</button>
            <p>Tổng thành tiền: </p>
        </div>
    </div>
</div>
</body>
</html>

