<?php
  session_start();

  require "../config/db_connect.php";

  $ori_name = 
  $date = date("Y-m-d H:i:s");
  $fn = date("YmdHis");

  move_uploaded_file($_FILES['file_upload']['tmp_name'], "../file/".$fn);


  $stmt = $conn -> prepare("INSERT INTO library (filename, uploadtime) VALUES (?, ?)");     //SQL INSERT문 
  $stmt -> execute(array($fn, $date));
  header("Location:../view/library.php");
?>