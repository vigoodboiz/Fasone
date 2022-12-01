<?php
include_once "../../model/connect.php";
include_once "../../model/user.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../src/css/main.css">
    <link rel="stylesheet" href="../../src/css/user.css">
    <title>User</title>
</head>
<body>
    <div class="khung">
        <?php include 'aside.php'?>
        <main>
        <?php include 'header.php'?>
        <div class="banner">
            <div class="conten-text">
                <h1>Welcom to user</h1>
            </div>
            <div class="conten-banner">
               <img src="../../src/image/slider-pic.png" alt="">
            </div>
        </div>
        <div class="category">
            <div class="text">
                <h1>Users list</h1>
            </div>
            <div class="action">
                <div class="product-action">
                <a href="../main-view/add-new-user.php"><button>Add new user</button></a>
                </div>
                <div class="product-form">
                <form action="user.php" method="POSTPOST">
                    <input type="text" name="findname" placeholder="Search name user">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                </div>
            </div>
        </div>
        <table border=1>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>User name</th>
                    <th>User avatar</th>
                    <th>User email</th>
                    <th>Password</th>
                    <th>User tell</th>
                    <th>User</th>
                    <th>User role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <div class="mb-4">
                <?php foreach($user as $key => $value) :?>
                    <tr>
                        <td><?php echo $key + 1?></td>
                        <td><?php echo $value["name"]?></td>
                        <td><img src="../../src/image/<?php echo $value["avt"]?>" alt=""></td>
                        <td><?php echo $value["email"]?></td>
                        <td><?php echo $value["password"]?></td>
                        <td><?php echo $value["tell"]?></td>
                        <td><?php echo $value["user"]?></td>
                        <td><?php
                        if($value["role"] == 1){
                            echo "Khách hàng";
                        } else if($value["role"] == 2){
                            echo "Nhân viên";
                        } else{
                            echo "Quản lí";
                        }
                        ?></td>
                        <td class="conten-action">
                            <a href="../main-view/update-user.php?id=<?php echo $value["id_user"]?>"><button>Update</button></a>
                            <a href="../../controller/delete-user.php?id=<?php echo $value["id_user"]?>" onclick="if (!confirm('Bạn có muốn xóa sản người dùng không?')) { return false }"><button>Delete</button></a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </div>
            </tbody>
        </table>
        </main>    
    </div>
</body>
</html>