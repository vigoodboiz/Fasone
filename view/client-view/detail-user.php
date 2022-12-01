<?php
    include_once '../../model/connect.php';
    include_once '../../model/detail-user.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/css/style.css">
    <link rel="stylesheet" href="../../src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
	<title>Chi tiết khách hàng</title>
</head>
<body>
    <?php include '../../view/header.php'?>
<div class="detail-user">
        <h1 style="margin-left: 20px;">Thông tin Khách hàng</h1>
        <br>
        <div class="detail-avt">
            <img src="../../src/image/<?php echo $SESSION["avt"]?>" alt="">
        </div>
        <div class="information">
            <span>Your name</span><br>
            <h1><?php echo $SESSION["name"]?></h1><br>
            <span>Your email</span><br>
            <h1><?php echo $SESSION["email"]?></h1><br>
            <span>Your user</span><br>
            <h1><?php echo $SESSION["user"]?></h1>
        </div>
        <div class="action">
            <a href=""><button>Logout</button></a>
            <a href=""><button>Back</button></a>
            <a href=""><button>Change password</button></a>
        </div>
    </div>
    <br><hr>
    <?php include '../../view/footer.php'?>
</body>
</html>