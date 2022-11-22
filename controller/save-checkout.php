<?php
require "../connect.php";
if(isset($save)){
 $name = $_POST['name'];
 $user = $_POST['user'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $numberphone =$_POST['numberphone'];
 $sql_new="INSERT INTO khach_hang('$name','$user','$email','$address','$numberphone') ";
 $reult = $conn->exec($sql_new);
$sql = "select * from oders b inner join khach_hang c where b.ma_khach_hang = c.ma_khach_hang order by ma_khach_hang";
 $this->setQuery($sql);
 $khachhangs=$this->loadAllRows();
 $ngaymua = date('Y-m-d');
}

?>

