<?php
  session_start();
  
  require "../config/db_connect.php";
  
  
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $newpassword = $_POST["newpassword"];
  $Confirmpassword = $_POST["Confirmpassword"];
  
  $userId = $_SESSION['userId'];
  
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {      //유효성 검사(email 구문 확인)
        echo("$email is a valid email address");

        if ( preg_match("/^(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/", $newpassword)) { //하나 이상의 숫자, 대문자, 특수문자, 소문자를 입력
            
            $stmt = $conn -> prepare("SELECT * FROM users WHERE email = ?"); 
            $stmt -> execute(array($email));
            $user = $stmt -> fetch();

            
            $user_email = $user["email"];
            $user_password = $user["password"];
            
            if (filter_var($password === $user_password)) {
                
                if(filter_var($newpassword === $Confirmpassword)) {  
                        //유효성 검사(비밀번호 와 확인 비밀번호가 동일한지 확인)        

            } else {
            echo("$Confirmpassword is a not vaild password");
            }
            

            } else {
                echo("$password is a not vaild password");
            }





            //UPADTE DATABASE  
        
            $stmt = $conn -> prepare("UPDATE users SET username=:username, email=:email, password=:pwd WHERE user_id=:userId");     //SQL INSERT문 
            $stmt -> execute(array(':username' => $username, ':email' => $email, ':pwd' => $newpassword, ':userId' => $userId));


            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;

            
            header("Location:../view/main.php");

        } else {
            echo("<script>alert(' Enter the valid Password! '); location.replace('../view/modify.php');</script>");
        }
    

    } else {
        echo("$email is not a valid email address");
    }

  

?>

