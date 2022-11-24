<?php
include "../model/connect.php"; 

$id = $_GET["id"];

        $query = "DELETE FROM user WHERE  id=$id";
        connect($query);
        header("location: ../view/admin-view/user.php");
?>