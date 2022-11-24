<?php
//require "../controller/save-checkout.php"

require "../connect.php";
require "cart.php";
require "../controller/save-checkout.php";
$tong = 0;
$tensp = "";
for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
    $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
    $tong += $tt;

}

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $numberphone = $_POST['numberphone'];
    $sql_new = "INSERT INTO khach_hang VALUES (NULL,'$name','$address','$numberphone','$email','$user') ";
    $reult = $conn->exec($sql_new);
    $ngaymua = date('Y-m-d');
    $total = $tong;

    $sql_new2="INSERT INTO `orders` (`id_oders`, `ngaymua`, `sanpham`, `ma_khach_hang`, `total`, `status`, `hinh_thuc_thanh_toan`) VALUES (NULL, '$ngaymua', NULL, NULL, '$tong', '1', 'Tiền mặt')";
    $reult2 = $conn->exec($sql_new2);

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
    <p> hahaha <?php echo $tensp ?> </p>
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
<!--                    <div class="col-md-6 mb-3">-->
<!--                        <label for="lastName">Tên</label>-->
<!--                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">-->
<!--                        <div class="invalid-feedback"> Tên hợp lệ là bắt buộc. </div>-->
<!--                    </div>-->
                </div>
                <div class="mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Username" required="" name="user">
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
<!--                <div class="mb-3">-->
<!--                    <label for="address2">Địa chỉ 2 <span class="text-muted">(Optional)</span></label>-->
<!--                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-md-5 mb-3">-->
<!--                        <label for="country">Country</label>-->
<!--                        <select class="custom-select d-block w-100" id="country" required="">-->
<!--                            <option value="">Choose...</option>-->
<!--                            <option>United States</option>-->
<!--                        </select>-->
<!--                        <div class="invalid-feedback"> Please select a valid country. </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4 mb-3">-->
<!--                        <label for="state">State</label>-->
<!--                        <select class="custom-select d-block w-100" id="state" required="">-->
<!--                            <option value="">Choose...</option>-->
<!--                            <option>California</option>-->
<!--                        </select>-->
<!--                        <div class="invalid-feedback"> Please provide a valid state. </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-3">-->
<!--                        <label for="zip">Zip</label>-->
<!--                        <input type="text" class="form-control" id="zip" placeholder="" required="">-->
<!--                        <div class="invalid-feedback"> Zip code required. </div>-->
<!--                    </div>-->
<!--                </div>-->
                <hr class="mb-4">
<!--                <div class="custom-control custom-checkbox">-->
<!--                    <input type="checkbox" class="custom-control-input" id="same-address">-->
<!--                    <label class="custom-control-label" for="same-address">Địa chỉ giao hàng giống với địa chỉ thanh toán của tôi</label>-->
<!--                </div>-->
<!--                <div class="custom-control custom-checkbox">-->
<!--                    <input type="checkbox" class="custom-control-input" id="save-info">-->
<!--                    <label class="custom-control-label" for="save-info">Lưu thông tin này cho lần sau</label>-->
<!--                </div>-->
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
<!--                <div class="row">-->
<!--                    <div class="col-md-6 mb-3">-->
<!--                        <label for="cc-name">Name on card</label>-->
<!--                        <input type="text" class="form-control" id="cc-name" placeholder="" required="">-->
<!--                        <small class="text-muted">Tên đầy đủ như hiển thị trên thẻ</small>-->
<!--                        <div class="invalid-feedback"> Tên trên thẻ là bắt buộc </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6 mb-3">-->
<!--                        <label for="cc-number">Credit card number</label>-->
<!--                        <input type="text" class="form-control" id="cc-number" placeholder="" required="">-->
<!--                        <div class="invalid-feedback"> Số thẻ tín dụng là bắt buộc </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-md-3 mb-3">-->
<!--                        <label for="cc-expiration">hết hạn</label>-->
<!--                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">-->
<!--                        <div class="invalid-feedback"> Yêu cầu ngày hết hạn </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3 mb-3">-->
<!--                        <label for="cc-cvv">CVV</label>-->
<!--                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">-->
<!--                        <div class="invalid-feedback"> Yêu cầu mã bảo mật </div>-->
<!--                    </div>-->
<!--                </div>-->
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