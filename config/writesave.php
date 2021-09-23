<?php

session_start();

require "../config/db_connect.php";

$title = $_POST["title"];
$contents = $_POST["contents"];
$date = date("Y-m-d H:i:s");

    $I_stmt = $conn -> prepare("INSERT INTO board (title, contents) VALUES (?, ?)");
    $I_stmt -> execute(array($title, $contents, $date));
    header("Location:../view/main.php");
?>
4