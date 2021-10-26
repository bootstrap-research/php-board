<?php
  session_start();

  require "../config/db_connect.php";

  $ori_name = $_FILES['file_upload']['name']; //file_upload = file_upload.php의 인풋의 네임값
  $fn = date("YmdHis");
  $date = date("Y-m-d H:i:s");

  move_uploaded_file($_FILES['file_upload']['tmp_name'], "../file/".$fn);


  $stmt = $conn -> prepare("INSERT INTO library (filename, ori_name, uploadtime) VALUES (?, ?, ?)");     //SQL INSERT문 
  $stmt -> execute(array($fn, $ori_name, $date));
  echo("<script>alert(' Successfully uploaded! '); location.replace('../view/library.php');</script>");



?>