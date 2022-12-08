<?php
include_once "../../model/connect.php";
include_once "../../model/user.php";
// $query = "select * from user";
// $item = getAll($query);
?>
<aside>
    <div class="logo">
        <a href="../../index.php"><img src="../../src/image/logo.png" alt=""></a>
    </div>
    <div class="menu">
        <ul>
            <li><a href="dashboard.php" aria-hidden="true">Dashboard</a></li>
            <li><a href="products.php" aria-hidden="true">Products</a></li>
            <li><a href="category.php" aria-hidden="true">Category</a></li>
            <li><a href="user.php" aria-hidden="true"> Users</a></li>
            <li><a href="comment.php" aria-hidden="true">Comment</a></li>
            <li><a href="statistical.php" aria-hidden="true"> Statistical</a></li>
            <li><a href="bill.php" aria-hidden="true">Bill</a></li>
        </ul>
    </div>
</aside>
<?php //if($_SESSION["role"] == 2) { echo "onclick=(alert('Bạn_không_phải_quản_lý'))"; } else { echo "href='user.php'"; }?>
<?php //if($_SESSION["role"] == 2) { echo "onclick=(alert('Bạn_không_phải_quản_lý'))"; } else { echo "href='statistical.php'"; }?>
