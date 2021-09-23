<?php
  session_start();

  require "../config/db_connect.php";


$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$Confirmpassword = $_POST["Confirmpassword"];
$date = date("Y-m-d H:i:s");

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {      //유효성 검사
  echo("$email is a valid email address");

    if(filter_var($password === $Confirmpassword)) {      //유효성 검사
      echo("$password is a vaild password");

    } else {
        echo("$password is a not vaild password");
      }

    $stmt = $conn -> prepare("INSERT INTO users (username, email, password, create_at) VALUES (?, ?, ?, ?)");     //SQL INSERT문 
    $stmt -> execute(array($username, $email, $password, $date));
    header("Location:../view/main.php");
  
  } else {    
    echo("$email is not a valid email address");
}


?>