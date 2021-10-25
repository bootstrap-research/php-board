<?php

//   session_start();

//   require "../config/db_connect.php";


// $i_upload = $_POST["image_upload"];
// $i_submit = $_POST["upload_submit"];


//     if(isset($_POST['image_upload']) && isset($_FILES['upload_submit'])){



$target_dir = "C:\Users\gyumi\Documents\GitHub\php-board\upload_file\img";
$target_file = $target_dir . basename($_FILES["file_upload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = filesize($_FILES["file_upload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an img - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an img.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already uploaded.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["file_upload"]["size"] > 400000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($FileType != "pdf" && $FileType != "png" && $FileType != "gif" && $FileType != "jpg") {
  echo "Sorry, only pdf, png, gif, jpg are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["file_upload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>

