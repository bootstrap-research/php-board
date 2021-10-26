<?php
  session_start();

  require "../config/db_connect.php";

  $ori_name = $_FILES['img_upload']['name']; //img_upload = img_upload.php의 인풋의 네임값
  $fn = date("YmdHis");
  $date = date("Y-m-d H:i:s");

  move_uploaded_file($_FILES['img_upload']['tmp_name'], "../img/".$fn); 


  $stmt = $conn -> prepare("INSERT INTO gallery (imgname, ori_name, uploadtime) VALUES (?, ?, ?)");     //SQL INSERT문 
  $stmt -> execute(array($fn, $ori_name, $date));
  echo("<script>alert(' Successfully uploaded! '); location.replace('../view/gallery.php');</script>");

?>

<!-- Array
(
    [name] => 캡처.PNG
    [type] => image/png
    [tmp_name] => C:\Windows\Temp\php3C63.tmp
    [error] => 0
    [size] => 127299
) -->

