<?php
include_once "../model/connect.php";
include_once "../model/products.php";
include_once "../model/category.php";
require "../connect.php";

$query = "select * from user";
$item = getOne($query);
$ID = $_GET['id'];
$query = "select * from sanpham WHERE `sanpham`.`id_danhmuc` = '$ID'";
$products = $conn->query($query)->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao diện</title>
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="./src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="information">
        <p><img src="https://img.icons8.com/material/24/null/clock--v1.png"/> Giao hàng miễn phí và nhanh chóng</p>
        <p><img src="https://img.icons8.com/ios-filled/50/null/shopping-mall.png"/> Miễn phí vận chuyển trên tất cả các đơn đặt hàng </p>
        <p><img src="https://img.icons8.com/material/24/null/new-post--v1.png"/> vchientaki@gmail.com</p>

    </div>
    <hr>
    <div class="header">
        <div class="function">
            <a href=""><img src="../src/image/logo.png" alt="Logo"></a>
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
                <a href="../index.php">TRANG CHỦ</a>
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
        <img src="../src/image/banner.jpg" alt="">
    </div>
</header>
<main>
    <div id="products" class="mb-4">
        <div class="text">
            <h1>Mặc ngay, yêu luôn</h1>
        </div>
        <div class="danhmuc">
            <!--    <select name="search-findname" id="">-->
            <!--      <option value="">Chọn danh mục</option>-->
            <!--      --><?php //foreach($category as $value): ?>
            <!--        <option value="--><?php //echo $value["id_danhmuc"]?><!--">--><?php //echo $value["name"]?><!--</option>-->
            <!--      --><?php //endforeach ?>
            <!--    </select>-->
            <form method="get">
                <a href="../index.php#products" style="margin-left: 50px; margin-right: 50px ;font-size: 25px;color: black; text-decoration: none "><strong>Tất cả</strong></a>

                <?php
                foreach ($category as $value){
                    ?>

                    <a href="loc.php?id=<?php echo $value['id_danhmuc'] ?>#products" style="text-decoration: none;margin-right: 50px;font-size: 25px;color: black;text-align: center "><strong><?php echo $value['name'] ?></strong></a>


                <?php } ?>
            </form>
            <!--    <button name="find">Find</button>-->
        </div>
        <div class="boxsp">
            <div class="sp">
                <?php foreach($products as $value): ?>
                    <div class="item">
                        <div class="pic-item">
                            <a href="./view/client-view/detail-products.php?id=<?php echo $value["id_sanpham"] ?>"><img src="../src/image/<?php echo $value["img"] ?>" alt=""></a>
                        </div>
                        <h2><a href="./view/client-view/detail-products.php?id=<?php echo $value["id_sanpham"] ?>"><?php echo $value["name"] ?></a></h2>
                        <p><?php echo $value["price"] ?>đ</p>
                        <small><?php echo $value["mota"] ?></small>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</main>
<div id="about" class="about">
    <div class="nono">
        <h2>Giới thiệu về FASONE</h2>
    </div>
    <div class="table">
        <div class="img-table">
            <img src="../src/image/images1.jpg" alt="">
        </div>
        <div class="text-table">
            <h1>Câu chuyện dịch vụ khách hàng của Fasone</h1>
            <p>Theo một khảo sát gần đây nhất của Fasone tự thực hiện thì có tới 51% khách hàng quyết định mua sắm ở Fasone vì ấn tượng với dịch vụ khách hàng. 94% khách hàng sẵn sàng giới thiệu Fasone với những người khác.

                Ở Fasone, chúng tôi tin rằng việc bán một gói hàng đó là bán cả một trải nghiệm mua sắm. Fasone có kỳ vọng trở thành một thương hiệu điển hình về việc hướng tới khách hàng một cách sâu sắc tại Việt Nam. Với mong muốn góp một phần nhỏ thay đổi nhận thức của các doanh nghiệp trong việc mang tới những trải nghiêm tốt hơn cho khách hàng, đặc biệt trong lĩnh vực Thương Mại Điện Tử.

                Fasone là thương hiệu đầu tiên và hiện tại vẫn là duy nhất có chính sách đổi trả MIỄN PHÍ và lên tới 60 ngày với bất cứ lý do gì. Chúng tôi đã xây dựng được việc đổi hàng và lấy hàng trả về tận nhà khách hàng, thậm chí chúng tôi thường xuyên gửi sản phẩm mới cho khách hàng trước khi cần thu hồi sản phẩm cũ về. Và điều vui mừng đó là gần đây đã có nhiều hơn các đơn vị vận chuyển chào dịch vụ này và phổ biến hơn ở các bạn bán hàng Online.

                Việc đóng gói một hộp đồ với “Double Box” cũng được Fasone đi tiên phong từ cách đây 2 năm, và trở thành phổ biến nhiều hơn ở các thương hiệu khác.</p>
        </div>
    </div>
    <div class="title">
        <h1>Câu chuyện mô hình doanh nghiệp CÓ TRÁCH NHIỆM
            FasOne đang hướng tới</h1>
    </div>
    <div class="table">
        <div class="text-table">
            <h2>Với Khách Hàng</h2>
            <p>FasOne kỳ vọng mang lại sản phẩm chất lượng hơn nhờ mô hình quản lý chuỗi cung ứng từ gốc (với ngành may mặc đó là từ sợi), Coolmate cũng có các đối tác ở quy mô toàn cầu, và chất lượng về nguyên liệu đạt tiêu chuẩn cao trong ngành may mặc, có thể so sánh với các thương hiệu lớn và lâu đời.

                Ngoài ra mô hình bán hàng trực tiếp (Ecommerce D2C) cho phép FasOne được đầu tư nhiều hơn cho phần sản xuất thay vì phải liên tục cắt giảm giá vốn như các mô hình truyền thống! Thực tế khách hàng sẽ thấy được chất lượng các sản phẩm Coolmate đã cải thiện đáng kể trong năm gần đây và chắc chắn trong tương lai nữa.

                FasOne kỳ vọng mang lại giá cả tốt hơn cho khách hàng nhờ vào mô hình bán hàng trực tiếp thông qua nền tảng TMĐT. Thay vì việc phải bán giá sản phẩm x4-x6 lần giá vốn như truyền thống thì FasOne thường là x1.8-x2.5 lần mà chúng tôi vẫn có phần lời nhất định. Ngoài ra FasOne còn hướng tới mang lại một trải nghiệm mua sắm tốt hơn dành cho khách hàng nhờ vào việc tập trung rất nhiều vào dịch vụ khách hàng (tham khảo 11 cam kết của Coolmate dành cho khách hàng)</p>
        </div>
        <div class="img-table">
            <img src="../src/image/tt02.jpeg" alt="">
        </div>
    </div>
</div>
<div id="lienhe">
    <div class="text">
        <h1>Liên hệ với chúng tôi</h1>
    </div>
    <div>
        <div class="table3">
            <div>
                <img src="https://img.icons8.com/ios-glyphs/30/FAB005/order-delivered.png"/>
                <h2>Địa chỉ</h2>
                <p>Lê Đức Thọ, Mỹ Đình, Nam Từ Liêm, Hà Nội</p>
            </div>
            <div>
                <img src="https://img.icons8.com/ios-glyphs/30/FAB005/ringer-volume.png"/>
                <h2>Gọi cho chúng tôi</h2>
                <p>0934497***</p>
                <p>0328445***</p>
            </div>
            <div>
                <img src="https://img.icons8.com/ios/50/FAB005/apple-mail.png"/>
                <h2>Email</h2>
                <p>vchientaki@gmail.com</p>
            </div>
        </div>
        <div class="ggmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.304640818317!2d105.76176151440725!3d21.020493193437563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454a15b9aeb8d%3A0x84ec0f4d29a7ab36!2zU8OibiB24bqtbiDEkeG7mW5nIFF14buRYyBnaWEgTeG7uSDEkMOsbmg!5e0!3m2!1svi!2s!4v1669872747931!5m2!1svi!2s" width="1024" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact">
            <h2>Gửi mẫu</h2>
            <form action="">
                <div class="table2">
                    <input type="text" placeholder="Nhập họ tên của bạn" required>
                    <input type="email" placeholder="Nhập email của bạn" required>
                </div>
                <div class="content">
                    <input type="text" placeholder="Nhập nội dung phản hồi" required>
                </div>
                <input type="submit">
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="footers">
        <h2>MUA SẢN PHẨM CỦA BẠN TRONG MỘT CÁCH ĐƠN GIẢN</h2>
        <div>
            <h2>Thông tin</h2>
            <a href="">Trang chủ</a><br>
            <a href="">Sản phảm</a><br>
            <a href="">Liên hệ</a><br>
        </div>
        <div>
            <h2>Thông tin của hàng</h2>
            <p>Địa chỉ : Mỹ Đình, Hà Nội</p>
            <p>Email: vchientaki@gmail.com</p>
            <p>Điện thoại: 09344*****</p>
        </div>
        <div>
            <h2>Trang liên hệ</h2>
            <a href=""><img src="https://img.icons8.com/material/24/null/facebook-new.png"/></a>
            <a href=""><img src="https://img.icons8.com/material/24/null/youtube-play--v1.png"/></a>
            <a href=""><img src="https://img.icons8.com/material/24/null/instagram-new--v1.png"/></a>
        </div>
    </div>
</footer>

</body>
</html>