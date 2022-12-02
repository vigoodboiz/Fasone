<?php  
include_once "./model/connect.php";
include_once "./model/products.php";
include_once "./model/category.php";
?>
  <main>
  <div id="products" class="mb-4">
    <div class="text">
    <h1>Mặc ngay, yêu luôn</h1>
    </div>
  <div class="danhmuc">
    <select name="search-findname" id="">
      <option value="">Chọn danh mục</option>
      <?php foreach($category as $value): ?>
        <option value="<?php echo $value["id_danhmuc"]?>"><?php echo $value["name"]?></option>
      <?php endforeach ?>
    </select>
    <button name="find">Find</button>
  </div>
    <div class="boxsp">
      <div class="sp">
      <?php foreach($products as $value): ?>
                    <div class="item">
                        <div class="pic-item">
                        <a href="./view/client-view/detail-products.php?id=<?php echo $value["id_sanpham"] ?>"><img src="./src/image/<?php echo $value["img"] ?>" alt=""></a>
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
