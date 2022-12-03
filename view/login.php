<?php
include_once "../model/connect.php";
include_once "../controller/login.php";
$query = "select * from user";
$item = getOne($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="khung">
        <div class="action">
            <div class="action-img">
                <img src="https://picsum.photos/200/300" alt="">
            </div>
            <div class="action-login">
            <h1>Login</h1>
            <form action="login.php" method="POST">
            <span>User name</span><br>
            <input type="text" name="name" placeholder="Enter your name" required><br>
            <span>Password</span><br>
            <input type="password" name="password" placeholder="Enter your password" required><br>
            <span style="color: red;"><?php echo $_SESSION["errPassword"]?></span>
            <button name="submit">Login</button><br>
            <a href="./client-view/change-password.php?id=<?php echo $item["id_user"]?>">Quên mật khẩu?</a><br>
            <span>Do not have an account?</span><a href="./signup.php">Register here</a>
        </form>
            </div>
        </div>
    </div>
    <?php
    $_SESSION["password"] = "";
    $_SESSION["errPassword"] = "";
    ?>
</body>
</html>