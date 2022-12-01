<?php
$id_user = $_GET["id"];
$query = "select * from user where id_user=$id_user";
$item = getOne($query);
?>