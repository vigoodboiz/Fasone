<?php
    session_start();
    // if(isset($_SESSION['name'])&&($_SESSION['name']>0)){
        require "../model/connect.php";

        if (isset($_POST["guibinhluan"])) {
            $noidung = $_POST["noidung"];
        
            $query = "insert into binhluan values(null,'$noidung',null,null,null,null)";
            connect($query);
            // $result = $connect->prepare($sql);
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
</head>
<body>
    <hr>
    <form action="comment.php" method="post">
        <input type="hidden" name="id_sanpham" value="<?=$_GET['id_sanpham']?>">
        <textarea name="noidung" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Gửi bình luận" name="guibinhluan">
    </form>
</body>
</html>
<?php
    // }else{
    //     echo "<a href='../view/login.php' target='_parent'>Đăng nhập ngay để bình luận</a>";
    // }
?>