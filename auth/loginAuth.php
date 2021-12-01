<?php
session_start();

require "../config/db_connect.php";     //DB 



if(isset($_POST["email"]) && isset($_POST["password"])              //중복 검사
    && !empty($_POST["email"]) && !empty($_POST["password"])) {


    $email = $_POST["email"];
    $password = $_POST["password"];

    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //Email 구문 검사
 
        $stmt = $conn -> prepare("SELECT * FROM users WHERE email=?"); 
        $stmt -> execute(array($email));
        $user = $stmt -> fetch();

        
        $user_email = $user["email"];
        $user_password = $user["password"];
        $user_username = $user["username"];
        $user_id = $user['user_id'];


        if ($email === $user_email) {            //같은지 비교 
            if ($password === $user_password) {
                $_SESSION["email"] = $user_email;
                $_SESSION["username"] = $user_username;
                $_SESSION["userId"] = $user_id;

                header("Location: ../view/main.php");
            } else {
                echo("<script>alert(' Enter the valid Password! '); location.replace('../view/login.php');</script>");
                // header("Location: ../view/login.php");
            }
        }
        
    } else {
        header("Location: ../view/login.php?error=Incorrect User name or password&email");
    }


} else {
    header("Location: ../view/login.php?error=Enter the User name or password&email");
}
