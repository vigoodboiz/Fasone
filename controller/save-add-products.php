<header>
	<h1>Thêm mới sản phẩm</h1>
</header>

<div id="form">

<form action="index.php?act=addsp" id="waterform" method="post" enctype="multipart/form-data" >

<div class="formgroup" id="name-form">
    Danh mục<br>
    <select name="iddm" id="">
        <?php
        foreach($listdanhmuc as $danhmuc){
            extract($danhmuc);
            echo'<option value="'.$id.'">'.$name.'</option>';
        }
        ?>
    </select>
</div>
<table>
    <tr>
        <td>
        Tên sản phâm<br>
    <input type="text" id="name" name="tensp">
        </td>
    </tr>
    <tr>
        <td>
        Giá<br>
    <input type="text" id="name" name="giasp">
        </td>
    </tr>
    <tr>
        <td>
        Hình<br>
    <input type="file" id="name" name="hinh">
        </td>
    </tr>
    <tr>
        <td>
        Thông tin<br>
    <textarea name="thongtin" id="" cols="30" rows="10"></textarea>
        </td>
    </tr>
    <tr>
        <td>
        Mô tả<br>
    <textarea name="mota" id="" cols="30" rows="10"></textarea>
        </td>
    </tr>
    <tr>
        <td>
        <input type="submit" name="themmoi" value="Thêm mới">
    <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH" ></a>
    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
        </td>
    </tr>
</table>
</form>
</div>