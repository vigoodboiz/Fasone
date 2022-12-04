<?php
//require "../controller/save-checkout.php"

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
    $id = $_POST['id'];

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
        $sp=[$hinh,$tensp,$gia,$soluong,$id];
        $_SESSION['giohang'][]=$sp;
    }

    // var_dump($_SESSION['giohang']);
}

require "../connect.php";
//require "cart.php";
require "../controller/save-checkout.php";
$tong = 0;
$tensp = "";
for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
    $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
    $tong += $tt;

}

//if (isset($_POST['save'])) {
//    $name = $_POST['name'];
//    $user = $_POST['user'];
//    $email = $_POST['email'];
//    $address = $_POST['address'];
//    $numberphone = $_POST['numberphone'];
//    $sql_new = "INSERT INTO khach_hang VALUES (NULL,'$name','$address','$numberphone','$email','$user') ";
//    $reult = $conn->exec($sql_new);
//    $ngaymua = date('Y-m-d');
//    $total = $tong;
//
//    $sql_new2="INSERT INTO `orders` (`id_oders`, `ngaymua`, `sanpham`, `ma_khach_hang`, `total`, `status`, `hinh_thuc_thanh_toan`) VALUES (NULL, '$ngaymua', NULL, NULL, '$tong', '1', 'Tiền mặt')";
//    $reult2 = $conn->exec($sql_new2);
//
//}
// session_start();
 if(empty($_SESSION)){
     header("location: ../login.php");
 }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/css/checkout.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
    <h1 style="text-align: center;margin-bottom: 50px;padding-top: 50px">Thanh Toán</h1>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Thẻ của bạn</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Tên sản phẩm</h6>
                        <small class="text-muted">Mô tả ngắn gọn</small>
                    </div>
                    <span class="text-muted">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Second product</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Third item</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">-$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong> <?php
                        echo $tong ?></strong>
                </li>
            </ul>
            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Địa chỉ thanh toán</h4>
            <form class="needs-validation" novalidate="" method="post">
                <div class="row">
                    <div class="col-md-6 mb-3">
                            <label for="firstName">Họ và tên</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="name">
                        <div class="invalid-feedback"> Tên hợp lệ là bắt buộc. </div>
                    </div>

                </div>
                <div class="mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><3</span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Ghi chú" required="" name="user">
                        <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" name="address">
                    <div class="invalid-feedback"> Vui lòng nhập địa chỉ vận chuyển của bạn. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Số điện thoại</label>
                    <input type="text" class="form-control" id="numberphone" placeholder="0123456789" required="" name="numberphone">
                    <div class="invalid-feedback"> Vui lòng nhập số điện thoại của bạn. </div>
                </div>

                <hr class="mb-4">

                <hr class="mb-4">
                <h4 class="mb-3">Payment</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                        <label class="custom-control-label" for="credit">Thẻ tín dụng</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="debit">Thẻ ghi nợ</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="paypal">Thanh toán khi nhận hàng</label>
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="save">Tiếp tục thanh toán</button>
            </form>
        </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2019 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>
<script src="../src/js/checkout.js"></script>

</body>
</html>