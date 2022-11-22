<?php
require "../connect.php";
session_start();
$tong = 0;
for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
 $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
 $tong += $tt;
}
if(isset($save)){
// $name = $_POST['name'];
// $user = $_POST['user'];
// $email = $_POST['email'];
// $address = $_POST['address'];
// $numberphone =$_POST['numberphone'];
// $sql_new="INSERT INTO khach_hang('$name','$user','$email','$address','$numberphone') ";
// $reult = $conn->exec($sql_new);
//$sql = "select * from oders b inner join khach_hang c where b.ma_khach_hang = c.ma_khach_hang order by ma_khach_hang";
// $this->setQuery($sql);
// $khachhangs=$this->loadAllRows();
 $ngaymua = date('Y-m-d');
 $total = $tong;
 $sanpham = $_SESSION['giohang'][$i][1];
 $sql_new2="INSERT INTO `orders` (`id_oders`, `ngaymua`, `sanpham`, `ma_khach_hang`, `total`, `status`, `hinh_thuc_thanh_toan`) VALUES (NULL, '2002-11-08', NULL, NULL, '111', '1', 'Tiền mặt')";
 $reult2 = $conn->exec($sql_new2);
}

?>

