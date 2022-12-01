<?php
include_once "./model/connect.php";
include_once "./model/products.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giao diện</title>
  <link rel="stylesheet" href="./src/css/style.css">
  <link rel="stylesheet" href="./src/font/fontawesome-free-6.2.1-web/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include './view/header.php';
    include './view/home.php';
    include './view/about.php';
    include './view/lienhe.php';
    include './view/footer.php';
    ?>
</body>
</html>