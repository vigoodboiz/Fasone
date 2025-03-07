<?php
include_once "../../model/connect.php";
include_once "../../model/products.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../src/css/main.css">
    <link rel="stylesheet" href="../../src/css/products.css">
    <title>Products</title>
</head>
<body>
    <div class="khung">
        <?php include 'aside.php'?>
        <main>
        <?php include 'header.php'?>
        <div class="banner">
            <div class="conten-text">
                <h1>Welcom to products</h1>
            </div>
            <div class="conten-banner">
               <img src="../../src/image/slider-pic.png" alt="">
            </div>
        </div>
        <div class="category">
            <div class="text">
                <h1>Products list</h1>
            </div>
            <div class="action">
                <div class="product-action">
                <a href="../main-view/add-new-products.php"><button>Add new products</button></a>
                </div>
                <div class="product-form">
                <form action="products.php" method="POSTPOST">
                    <input type="text" name="findname" placeholder="Search name products">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                </div>
            </div>
        </div>
        <table border=1>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Products name</th>
                    <th>Products price</th>
                    <th>Products sale</th>
                    <th>Products image</th>
                    <th>Infomation</th>
                    <th>Describe</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <div class="mb-4">
                <?php foreach($products as $key => $value) :?>
                    <tr>
                        <td><?php echo $key + 1?></td>
                        <td><?php echo $value["name"]?></td>
                        <td><?php echo $value["price"]?></td>
                        <td><?php echo $value["sale"]?></td>
                        <td><img src="../../src/image/<?php echo $value["img"]?>" alt=""></td>
                        <td><?php echo $value["thongtin"]?></td>
                        <td><?php echo $value["mota"]?></td>
                        <td class="conten-action">
                            <a href="../main-view/update-products.php?id=<?php echo $value["id_sanpham"]?>"><button>Update</button></a><br>
                            <a href="../../controller/delete-products.php?id=<?php echo $value["id_sanpham"]?>" onclick="if (!confirm('Bạn có muốn xóa sản phẩm không?')) { return false }"><button>Delete</button></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </div>
            </tbody>
        </table>
        </main>    
    </div>
</body>
</html>