<?php


$servername = "localhost";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$servername;dbname=duan1", $username, $password);
// thiết lập lỗi PDO thành ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function pdo_execute_get_id($query){

    $args = func_get_args();
    $args = array_slice($args, 1);

    $conn = getConnect();

    $stmt = $conn->prepare($query);
    $stmt->execute($args);
    $lastId =  $conn->lastInsertId();
    return $lastId;
}

?>
