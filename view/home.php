<main>
<div class="banner">
    <img src="./src/image/download.jpg" alt="">
  </div>
  <div class="text-header">
    <h1>Chào mừng đến FLASONE</h1>
  </div>
  <div class="search">
    <form action="" method="post">
      <input class="nhap"  type="text"  placeholder="Tìm kiếm sản phẩm" required>
      <input class="sech" type="submit"  value="Tìm kiếm">
  </form>
  </div>
  <div class="img_Slider">
                    <img src="./src/slide/image/img1.jpg" id="image" alt="">
                    <div class="icon">
                        <div class="right" >
                            <i id="right" onclick="before()" class="icon_slider fa-solid fa-arrow-right"></i>
                        </div>
                        <div class="left">
                            <i id="left" onclick="after()" class="icon_slider fa-solid fa-arrow-left"></i>
                        </div>
                    </div>
                </div>
    </div>
    <div class="boxsp">
      <div class="sanpham">
      <?php foreach($products as $value): ?>
                    <div class="item">
                        <div class="pic-item">
                        <a href="./view/client-view/detail-products.php?id=<?php echo $value["id"] ?>"><img src="./src/image/<?php echo $value["img"] ?>" alt=""></a>
                        </div>
                        <h2><a href="./view/client-view/detail-products.php?id=<?php echo $value["id"] ?>"><?php echo $value["name"] ?></a></h2>
                        <p><?php echo $value["price"] ?>$</p>
                        <small><?php echo $value["mota"] ?></small>
                    </div>
            <?php endforeach ?>
    </div>
  </div>
</main>