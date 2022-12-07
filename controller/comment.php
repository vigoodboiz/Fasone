<?php
    session_start();
    // if(isset($_SESSION['name'])&&($_SESSION['name']>0)){
        require "../model/connect.php";
        require "../model/comment.php";
        if (isset($_POST["guibinhluan"])) {
            $noidung= $_POST['noidung'];
            $name= $_POST['name'];
            $ngaybinhluan=date(' d/m/Y');
            $query = "INSERT into binhluan (noidung, name, ngaybinhluan) values ('$noidung','$name','$ngaybinhluan')";
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
    <link rel="stylesheet" href="../src/css/commentview.css">
</head>
<body>
    <hr>
    <form action="comment.php" method="post">
        <input type="hidden" name="id_sanpham" value="<?=$_GET['id_sanpham']?>">
        <input type="text" name="name" placeholder="name">
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