<?php

require "../config/db_connect.php";


$db=$conn; // Enter your Connection variable;
$tableName='gallery'; // Enter your table Name;
// upload image on submit
if(isset($_POST['submit'])){ 
    echo upload_image($tableName); 
}
  function upload_image($tableName){
   
    $uploadTo = "uploads/"; 
    $allowedImageType = array('jpg','png','jpeg','gif');
    $imageName = array_filter($_FILES['image_gallery']['name']);
    $imageTempName=$_FILES["image_gallery"]["tmp_name"];
    $tableName= trim($tableName);
if(empty($imageName)){ 
   $error="Please Select Images..";
   return $error;
}else if(empty($tableName)){
   $error="You must declare table name";
   return $error;
}else{
   $error=$savedImageBasename='';
   foreach($imageName as $index=>$file){
         
    $imageBasename = basename($imageName[$index]);
    $imagePath = $uploadTo.$imageBasename; 
    $imageType = pathinfo($imagePath, PATHINFO_EXTENSION); 
 if(in_array($imageType, $allowedImageType)){ 
    // Upload image to server 
    if(move_uploaded_file($imageTempName[$index],$imagePath)){ 
        
    // Store image into database table
     $savedImageBasename .= "('".$imageBasename."'),";     
    }else{ 
     $error = 'File Not uploaded ! try again';
  } 
}else{
    $error .= $_FILES['file_name']['name'][$index].' - file extensions not allowed<br> ';
 }
 }
    save_image($savedImageBasename, $tableName);
}
    return $error;
}
    // File upload configuration 
 function save_image($savedImageBasename, $tableName){
      global $db;
      if(!empty($savedImageBasename))
      {
      $value = trim($savedImageBasename, ',');
      $saveImage="INSERT INTO ".$tableName." (image_name) VALUES".$value;
      $exec= $db->query($saveImage);
      if($exec){
        echo "Images are uploaded successfully";  
       }else{
        echo  "Error: " .  $saveImage . "<br>" . $db->error;
       }
      }
    }     
    
?>

https://codingstatus.com/php-image-gallery/

<!-- $target_dir = "C:\Users\gyumi\Documents\GitHub\php-board\upload";
$target_file = $target_dir . basename($_FILES["file_upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["file_upload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["file_upload"]["size"] > 40000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
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
?> -->