
<?php  
include_once "../../model/connect.php";
include_once "../../model/products.php";
include_once "../../model/category.php";
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/css/style.css">
    <link rel="stylesheet" href="../../src/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Document</title>
  </head>
  <body>
  <main>
    <?php require_once 'header.php'?>
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
                        <a href="detail-products.php?id=<?php echo $value["id_sanpham"] ?>"><img src="../../src/image/<?php echo $value["img"] ?>" alt=""></a>
                        </div>
                        <h2><a href="detail-products.php?id=<?php echo $value["id_sanpham"] ?>"><?php echo $value["name"] ?></a></h2>
                        <p><?php echo $value["price"] ?>đ</p>
                        <small><?php echo $value["mota"] ?></small>
                    </div>
            <?php endforeach ?>
    </div>
</div>
  </div>
</main>
<?php require_once 'about.php'?>
<?php require_once 'lienhe.php'?>
<?php require_once 'footer.php'?>
  </body>
  </html>
