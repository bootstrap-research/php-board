<?php

session_start();

require "../config/db_connect.php";

$title = $_POST["title"];              //제목 
$contents = $_POST["contents"];        //내용 
$date = date("Y-m-d H:i:s");           //날짜 

$stmt = $conn -> prepare("INSERT INTO board (title, contents, postingtime) VALUES (?, ?, ?)");
$stmt -> execute(array($title, $contents, $date));
header("Location:/view/main.php"); 

?>
