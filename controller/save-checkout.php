<?php



//require "../controller/save-checkout.php"

require "../connect.php";
require "../model/cart.php";
//$noi = "select * from khach_hang b inner join orders c where b.ma_khach_hnag = c.ma_khach_hang";
//$thuchiennoi = $conn->query($noi)->fetchAll();
$tong = 0;
$tensp = "";
for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
    $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
    $tong += $tt;

}
// Tao don hang
//$query = "
//insert into orders (ma_khach_hang, total, status)
//VALUES (1, '$tong', 0)
//";
$query2 = "INSERT INTO `oder_detail` (`id_oder_detail`, `id_oders`, `id_sanpham`, `sanpham`, `soluong`, `price`) VALUES (NULL, '1', '1', '1111', '1', '1111')";

$id_oder_detail= pdo_execute_get_id($query2);

// Tao don hang chi tiet
foreach (sess)


if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $numberphone = $_POST['numberphone'];
    $sql_new = "INSERT INTO khach_hang VALUES (NULL,'$name','$address','$numberphone','$email','$user') ";
    $reult = $conn->exec($sql_new);
    $ngaymua = date('Y-m-d');
    $total = $tong;
    foreach($_SESSION['giohang'] as $product) {
        echo $product[2]."</br>";
//        die();
        $sql_new2 = "INSERT INTO `orders` (`id_oders`, `ngaymua`, `sanpham`, `ma_khach_hang`, `total`, `status`, `hinh_thuc_thanh_toan`) VALUES (NULL, '$ngaymua', '$product[1]', 'ma_khach_hang', '$tong', '1', 'Tiền mặt')";
        $reult2 = $conn->exec($sql_new2);
    }
//    $sql_new2 = "INSERT INTO `orders` (`id_oders`, `ngaymua`, `sanpham`, `ma_khach_hang`, `total`, `status`, `hinh_thuc_thanh_toan`) VALUES (NULL, '$ngaymua', NULL, NULL, '$tong', '1', 'Tiền mặt')";
//    $reult2 = $conn->exec($sql_new2);

}
?>




