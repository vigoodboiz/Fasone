<?php
$query2 = "select hd.id_oders,ngaymua,total,status, kh.id_khach_hang,ten_khach_hang,dia_chi,dien_thoai,email,ghichu,cthd.sanpham,soluong,price from oders hd, khach_hang kh,oder_detail cthd where hd.id_khach_hang=kh.id_khach_hang and hd.id_oders = cthd.id_oders order by hd.id_oders";
$bill_detail = $conn->query($query2)->fetchAll();
$query = "select * from oders b inner join khach_hang c where b.id_khach_hang = c.id_khach_hang";
$bill = $conn->query($query)->fetchAll();
?>

