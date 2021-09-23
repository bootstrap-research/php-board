<?php

session_start();

require "../config/db_connect.php";

$title = $_POST["title"];
$contents = $_POST["contents"];

    $I_stmt = $conn -> prepare("INSERT INTO board (title, contents) VALUES (:title, :contents)");
    $I_stmt -> execute(array(":title" => $title, ":contents" => $contents));
    header("Location:../view/main.php");
?>
4