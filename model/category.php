<?php
// if(empty($_SESSION)){
//     header("location:../login.php");
// }

$query = "select * from danhmuc";
$category = getAll($query);
?>