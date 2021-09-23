<?php

$db_host = "localhost";
$db_user = "root";
$db_name = "php_board";
$db_password = "1234";

$dsn = "mysql:host=$db_host;dbname=$db_name;";

try {
    $conn = new PDO($dsn, $db_user, $db_password); //DSN, ID, PASSWORD 입력
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //PDO 객체 에러 처리 방식 
    echo "connect";

} catch(PDOException $e) {
    echo "error";
}
?>