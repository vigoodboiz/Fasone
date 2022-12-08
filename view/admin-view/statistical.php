<?php
include '../../model/pdo.php';
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
    <title>Document</title>
    <style>
        h1{
            width: 1110px;
            height: 50px;
            background-color: #A9A9A9;
            text-align:center;
        }
    </style>
</head>
<body>
<div class="khung">
    <?php include 'aside.php'?>
    <main>
        <?php include 'header.php'?>
        <div class="content">
            <h1 style="font-size: 25px; padding-top: 10px">Thống kê sản phẩm theo loại</h1>
            <table border="1" width=1110 height=200>
                <tr style="text-align:center ;">
                    <th width=200>Mã danh mục</th>
                    <th width=200>Tên danh mục</th>
                    <th width=100>Giá cao nhất </th>
                    <th width=200>Giá Thấp nhất</th>
                    <th width=200>Giá trung bình</th>
                </tr>
                <?php

                function loadall_thongke(){
                    $sql="select  MAX(sanpham.price) as maxprice,  MIN(sanpham.price) as minprice,  AVG(sanpham.price) as avgprice, danhmuc.id_danhmuc as madm, danhmuc.name as tendm   ";
                    $sql.=" from danhmuc left join sanpham on sanpham.id_danhmuc=danhmuc.id_danhmuc";
                    $sql.=" group by danhmuc.id_danhmuc order by danhmuc.id_danhmuc ASC";
                    $listhongke=pdo_query($sql);
                    return $listhongke;
                }
                $listhongke= loadall_thongke();

                foreach ($listhongke as $thongke) {
                    extract($thongke);
                    echo'
            <tr style="text-align:center;">
            <td>'.$madm.'</td>
            <td>'.$tendm.'</td>
            <td>'.$maxprice.'</td>
            <td>'.$minprice.'</td>
            <td>'.$avgprice.'</td>
            </tr>
            ';
                }
                ?>
            </table> <br>
            <h1 style="font-size: 25px; padding-top: 10px">Thống kê sản phẩm theo lượt xem</h1>
            <table border=1 width=1110 height=200 >
                <tr style="text-align:center;">

                    <th width=200>Mã sản phẩm</th>
                    <th width=200>Tên sản phẩm</th>
                    <th width=100>Lượt xem</th>

                </tr>
                <?php
                function listluotxem(){
                    $sql="select sanpham.id_sanpham as masp, sanpham.name as tensp, luotxem";
                    $sql.=" from danhmuc left join sanpham on sanpham.id_danhmuc=danhmuc.id_danhmuc";
                    $sql.=" group by sanpham.luotxem order by sanpham.luotxem ASC";
                    $listtk=pdo_query($sql);
                    return $listtk;
                }
                $listlx=listluotxem();
                foreach ($listlx as $lx) {
                    extract($lx);
                    echo'
                                           <tr style="text-align:center;">
                                             <td>'.$masp.'</td>
                                            <td>'.$tensp.'</td>
                                             <td>'.$luotxem.'</td>
                                        </tr>';
                }
                ?>
            </table><br>

    </main>
</div>
</body>
</html>