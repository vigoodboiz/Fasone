<?php
include_once "../../model/connect.php";
include_once "../../model/category.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../src/css/main.css">
    <link rel="stylesheet" href="../../src/css/category.css">
    <title>Category</title>
</head>
<body>
<div class="khung">
        <?php include 'aside.php'?>
        <main>
        <?php include 'header.php'?>
        <div class="banner">
            <div class="conten-text">
                <h1>Welcom to category</h1>
            </div>
            <div class="conten-banner">
               <img src="../../src/image/slider-pic.png" alt="">
            </div>
        </div>
        <div class="category">
            <div class="text">
                <h1>Category list</h1>
            </div>
            <div class="action">
                <div class="product-action">
                <a href="../view/main-view/add-new-category.php"><button>Add new category</button></a>
                </div>
                <div class="product-form">
                <form action="category.php" method="POST">
                    <input type="text" name="findname" placeholder="Search name category">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                </div>
            </div>
        </div>
        <table border=1>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($category as $key => $value): ?>
                    <tr>
                        <td><?php echo $key + 1?></td>
                        <td><?php echo $value["name"]?></td>
                        <td class="conten-action">
                            <a href="../view/main-view/update-category.php?id <?php echo $value["id"]?>"><button>Update category</button></a>
                            <a href="./controller/delete-category.php?id <?php echo $value["id"]?>" onclick="if (!confirm('Bạn có muốn xóa danh mục không?')) { return false }"><button>Delete category</button></a>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>
        </main>    
    </div>
</body>
</html>