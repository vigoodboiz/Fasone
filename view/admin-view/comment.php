<?php
include_once "../../model/connect.php";
include_once "../../model/comment.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../src/css/main.css">
    <link rel="stylesheet" href="../../src/css/comment.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="khung">
        <?php include 'aside.php'?>
        <main>
        <?php include 'header.php'?>
        <div class="banner">
            <div class="conten-text">
                <h1>Welcom to comment</h1>
            </div>
            <div class="conten-banner">
               <img src="../../src/image/slider-pic.png" alt="">
            </div>
        </div>
        <table border=1>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Comment conten</th>
                    <th>Commentator</th>
                    <th>Comment date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($comment as $key => $value) :?>
                    <tr>
                        <td><?php echo $key + 1?></td>
                        <td><?php echo $value["noidung"]?></td>
                        <td><?php echo $value["name_user"]?></td>
                        <td><?php echo $value["ngaybinhluan"]?></td>
                        <td class="conten-action">
                            <a href="./controller/delete-comment.php?id <?php echo $value["id"]?>" onclick="if (!confirm('Bạn có muốn xóa bình luận không?')) { return false }"><button>Delete comment</button></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
        </main>    
    </div>
</body>
</html>