<?php

// if(empty($_SESSION)){
//     header("location:../view/login.php");
// }
//     if($_SESSION["role"] == 1){
//         header("location: ../admin/index.php");
//     }
// }
$query = "select * from user";
$user = getAll($query);
?>