<?php
session_start();
if(empty($_SESSION)){
    header("location: ../login.php");
}
$query = "select * from binhluan";
$comment = getAll($query);
?>