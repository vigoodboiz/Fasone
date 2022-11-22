<?php
session_start();
if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
//làm rỗng giỏ hàng
if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
//xóa sp trong giỏ hàng
if(isset($_GET['delid'])&&($_GET['delid']>=0)){
    array_splice($_SESSION['giohang'],$_GET['delid'],1);
}
//lấy dữ liệu từ form
if(isset($_POST['addcart'])&&($_POST['addcart'])){
    $hinh=$_POST['hinh'];
    $tensp=$_POST['name'];
    $gia=$_POST['gia'];
    $soluong=$_POST['soluong'];

    //kiem tra sp co trong gio hang hay khong?

    $fl=0; //kiem tra sp co trung trong gio hang khong?

    for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) {

        if($_SESSION['giohang'][$i][1]==$tensp){
            $fl=1;
            $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3]=$soluongnew;
            break;

        }

    }
    //neu khong trung sp trong gio hang thi them moi
    if($fl==0){
        //them moi sp vao gio hang
        $sp=[$hinh,$tensp,$gia,$soluong];
        $_SESSION['giohang'][]=$sp;
    }

    // var_dump($_SESSION['giohang']);
}

function showgiohang(){
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
        if(sizeof($_SESSION['giohang'])>0){
            $tong=0;
            for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong+=$tt;
                echo '<tr class="spadd">
                            <td>'.($i+1).'</td>
                            <td><img height="100px" src="./admin/image/'.$_SESSION['giohang'][$i][0].'" alt=""></td>
                            <td>'.$_SESSION['giohang'][$i][1].'</td>
                            <td>'.$_SESSION['giohang'][$i][2].'</td>
                            <td>'.$_SESSION['giohang'][$i][3].'</td>
                            <td>
                                <div>'.$tt.'</div>
                            </td>
                            <td>
                                <a href="cart.php?delid='.$i.'">Xóa</a>
                            </td>
                        </tr>';
            }
            echo '<tr>
                        <th colspan="5">Tổng đơn hàng</th>
                        <th>
                            <div>'.$tong.'</div>
                        </th>
    
                    </tr>';
        }else{
            echo "Giỏ hàng rỗng!";
        }
    }
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- Cart ---->
<h1>GIỎ HÀNG</h1>
<div class="rowmb">
    <table class="sanpham">
        <tr>
            <th>STT</th>
            <th>Hình</th>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền ($)</th>
        </tr>
        <?php showgiohang(); ?>
    </table>
</div>
<div class="luachon">
    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
    <a href="cart.php?delcart=1"><input type="button" value="XÓA TOÀN BỘ GIỎ HÀNG"></a>
    <a href="index1.php"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
</div>
</div>
</body>
</html>