<?php
  session_start();

  require "../config/db_connect.php";


$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$Confirmpassword = $_POST["Confirmpassword"];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");

    if(filter_var($password === $Confirmpassword)) {
      echo("$password is a vaild password");

    } else {
        echo("$password is a not vaild password");
      }

    $stmt = $conn -> prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $stmt -> execute(array(":username" => $username, ":email" => $email, ":password" => $password));
    header("Location:../view/main.php");
  
  } else {    
    echo("$email is not a valid email address");
}


?>