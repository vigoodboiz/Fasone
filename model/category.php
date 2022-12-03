<?php
if(empty($_SESSION)){
    header("location: ../view/login.php");
}
$query = "select * from danhmuc";
$category = getAll($query);
?>