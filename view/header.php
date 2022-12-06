
<?php
$query = "select * from user";
$item = getOne($query);

?>
<header>
      <div class="information">
            <p><img src="https://img.icons8.com/material/24/null/clock--v1.png"/> Giao hàng miễn phí và nhanh chóng</p>
            <p><img src="https://img.icons8.com/ios-filled/50/null/shopping-mall.png"/> Miễn phí vận chuyển trên tất cả các đơn đặt hàng </p>
            <p><img src="https://img.icons8.com/material/24/null/new-post--v1.png"/> vchientaki@gmail.com</p>
           
        </div>
        <hr>
        <div class="header">
        <div class="function">
            <a href=""><img src="./src/image/logo.png" alt="Logo"></a>
            <div class="search">
                <form action="search" >
                    <form action="">
                        <div class="search_box">
                        <input type="text" class="input" placeholder="search...">
                            <button>Tìm kiếm</button>
                        </div>
                    </form>
                </form>
            </div>
            <div class="lg-lout">
                <a href="./view/client-view/detail-user.php?id=<?php echo $item["id_user"]?>"><img src="https://img.icons8.com/material/24/null/user-male-circle--v1.png"/></a>
                <a href="./controller/logout.php"><img src="https://img.icons8.com/material/24/null/exit.png"/></a>
            </div>
        </div>
        <div class="menu">
            <div class="menus">
                <a href="../../index.php">TRANG CHỦ</a>
                <a href="#products">SẢN PHẨM</a>
                <a href="#about">GIỚI THIỆU</a>
                <a href="#lienhe">LIÊN HỆ</a>
            </div>
            <div class="giohang">
                <a href=""><img src="https://img.icons8.com/ios-filled/50/null/shopping-mall.png"/>   GIỎ HÀNG</a>
            </div>
        </div>
      </div>
      <div class="banner">
                <img src="./src/image/banner.jpg" alt="">
        </div>
  </header>
