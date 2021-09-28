<?php
  session_start();

  require "../config/db_connect.php";


$username = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
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
    
    $stmt = $conn -> prepare("INSERT INTO users (username, email, phone, password, create_at) VALUES (?, ?, ?, ?, ?)");     //SQL INSERT문 
    $stmt -> execute(array($username, $email, $phone, $password, $date));
    header("Location:../view/login.php");
    
  } else {    
    echo("$email is not a valid email address");
  }




// // Validate password strength
// $uppercase = preg_match('@[A-Z]@', $password);
// $lowercase = preg_match('@[a-z]@', $password);
// $number    = preg_match('@[0-9]@', $password);
// $specialChars = preg_match('@[^\w]@', $password);

// if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 6) {
//     echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
// }else{
//     echo 'Strong password.';
  ?>

