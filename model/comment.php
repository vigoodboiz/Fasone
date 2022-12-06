<?php
// session_start();
// if(empty($_SESSION)){
//     header("location: ../view/login.php");
// } else{
//     if($_SESSION["role"] == 1){
//         header("location: ../admin/index.php");
//     }
// }

//if(empty($_SESSION)){
//    header("location:../login.php");
//}
$query = "select * from binhluan";
$comment = getAll($query);
?>