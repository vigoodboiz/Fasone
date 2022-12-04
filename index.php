<?php 
session_start();
if(empty($_SESSION)){
    header("location: ../login.php");
}
  header("location:./view/client-view/home.php"); 
?>