<?php
  session_start();

  require "../config/db_connect.php";


    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $newpassword = $_POST["newpassword"];
    $Confirmpassword = $_POST["Confirmpassword"];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {      //유효성 검사(email 구문 확인)
        echo("$email is a valid email address");


        if(filter_var($newpassword === $Confirmpassword)) {      //유효성 검사(비밀번호 와 확인 비밀번호가 동일한지 확인)
        echo("$newpassword is a notvaild password");
        
        } else {
        echo("$password is a not vaild password");
        }

        
        $stmt = $conn -> prepare("UPDATE users SET username = '$username', email = '$email' password = '$newpassword' WHERE email = 1");     //SQL INSERT문 
        $stmt -> execute(array($username, $email, $newpassword));
        header("Location:../view/modify.php");
        
    } else {    
        echo("$email is not a valid email address");
    }
  
  ?>

