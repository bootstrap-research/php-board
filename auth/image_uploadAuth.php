<?php
  session_start();

  require "../config/db_connect.php";


$i_upload = $_POST["image_upload"];
$i_submit = $_POST["upload_submit"];


    if(isset($_POST['image_upload']) && isset($_FILES['upload_submit'])){

?>

