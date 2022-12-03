<?php
include "../model/connect.php"; 

$id_user = $_GET["id"];

        $query = "DELETE FROM user WHERE  id_user=$id_user";
        connect($query);
        header("location: ../view/admin-view/user.php");
?>