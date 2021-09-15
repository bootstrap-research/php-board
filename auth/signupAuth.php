<?php
  session_start();

  require "../config/db_connect.php";


$username = $_POST["username"];
$email = $_POST["email"];
$pwd = $_POST["password"];
$Confirmpassword = $_POST["Confirmpassword"];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");

    if(filter_var($pwd === $Confirmpassword)) {
      echo("$pwd is a vaild password");

    } else {
        echo("$pwd is a not vaild password");
      }

    $stmt = $conn -> prepare("INSERT INTO users (username, email, pwd) VALUES (:username, :email, :pwd)");
    $stmt -> execute(array(":username" => $username, ":email" => $email, ":pwd" => $pwd));
    header("Location:../view/main.php");
  
  } else {    
    echo("$email is not a valid email address");
}


?>