<?php
    include_once '../../model/connect.php';
    include_once '../../model/detail-user.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/css/style.css">
    <link rel="stylesheet" href="../../src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../src/css/detail-user.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
	<title>Chi tiết khách hàng</title>
</head>
<body>
    <?php include './header.php' ?>
<div class="detail-user">
        <h1 style="margin-left: 20px;">Thông tin khách hàng</h1>
        <br>
        <div class="detail-form">
        <div class="detail-avt">
            <img src="../../src/image/<?php echo $item["avt"]?>" alt="">
        </div>
        <div class="informations">
            <span>Your name</span><br>
            <p><?php echo $item["name"]?></p><br>
            <span>Your email</span><br>
            <p><?php echo $item["email"]?></p><br>
            <span>Your user</span><br>
            <p><?php echo $item["user"]?></p>
        <div class="action">
            <a href="../../controller/logout.php"><button>Logout</button></a>
            <a href="../../index.php"><button>Back</button></a>
            <a href=""><button>Change password</button></a>
        </div>
        </div>
        </div>
    </div>
    <br><hr>
    <?php include './footer.php' ?>
</body>
</html>