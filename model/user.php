<?php
// session_start();
// if(empty($_SESSION)){
//     header("location: ../view/login.php");
// } else{
//     if($_SESSION["role"] == 1){
//         header("location: ../admin/index.php");
//     }
// }
$query = "select * from user";
$user = getAll($query);
?>