<?php
  session_start();

  require "../config/db_connect.php";


$username = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$Confirmpassword = $_POST["Confirmpassword"];
$date = date("Y-m-d H:i:s");

// $uppercase = preg_match('@[A-Z]@', $password);
// $lowercase = preg_match('@[a-z]@', $password);
// $number    = preg_match('@[0-9]@', $password);
// $specialChars = preg_match('@[^\w]@', $password);

// if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 6) {
//     echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';





    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {      //유효성 검사
      echo("$email is a valid email address");

      
        if ( preg_match("/^(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/", $password)) { //하나 이상의 숫자, 대문자, 특수문자, 소문자를 입력
                      //^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/



            if(filter_var($password === $Confirmpassword)) {      //유효성 검사
              echo("$password is a vaild password");
              
            } else {
              echo("$password is a not vaild password");
            }

            
            $stmt = $conn -> prepare("INSERT INTO users (username, email, phone, password, create_at) VALUES (?, ?, ?, ?, ?)");     //SQL INSERT문 
            $stmt -> execute(array($username, $email, $phone, $password, $date));
            header("Location:../view/login.php");
            

        } else {
          echo("<script>alert(' Enter the valid Password! '); location.replace('../view/signup.php');</script>");
        }
           
        
    } else { 
      echo("$email is not a valid email address"); 
    }

    // }else{
    //   echo 'Strong password.';
    // }


  ?>

