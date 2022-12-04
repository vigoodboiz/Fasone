<?php
// session_start();
 if(empty($_SESSION)){
     header("location: ../login.php");
 }
//     if($_SESSION["role"] == 1){
//         header("location: ../admin/index.php");
//     }
// }
$id_sanpham = $_GET["id"];
    $query = "select * from sanpham where id_sanpham=$id_sanpham";
    $products = getOne($query);
?>