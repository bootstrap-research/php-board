<?php

session_start();

require "../config/db_connect.php";

$sess_id = session_id();
$contents = $_POST["contents"];

$stmt = $conn -> prepare("INSERT INTO board (sess_id, contents) VALUES (:sess_id, :contents)");
    $stmt -> execute(array(":username" => $username, ":sess_id" => $sess_id, ":contents" => $contents));
    header("Location:../view/main.php");

?>