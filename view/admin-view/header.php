
<?php
$query = "select * from user";
$value = getOne($query);
?>
<header>
    <div class="conten">
        <div class="conten-avatar">
            <img src="../../src/image/<?php echo $value["avt"]?>" alt="">
        </div>
        <div class="conten-name">
            <p><span class="span1">Xin chào, </span><span><?php echo $value["name"]?></span></p>
        </div>
        <div class="conten-v">
            <a href="#"><i class="fa-solid fa-user" aria-hidden="true"></i> Profile</a><br>
            <a href="../../../controller/logout.php"><i class="fa-solid fa-right-from-bracket" aria-hidden="true"></i> Logout</a>
        </div>
    </div>
</header>