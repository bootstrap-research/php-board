<?php
session_start();

require "../config/db_connect.php";


if(isset($_POST["email"]) && isset($_POST["pwd"]) 
    && !empty($_POST["email"]) && !empty($_POST["pwd"])) {


    $email = $_POST["email"];
    $password = $_POST["pwd"];

    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //Email 구문 검사
 
        $stmt = $conn -> prepare("SELECT * FROM users WHERE email=?");
        $stmt -> execute(array($email));
        $user = $stmt -> fetch();

        
        $db_email = $user['email'];
        $db_password = $user['password'];
        $db_username = $user['username'];

        
        if ($email == $db_email) {
            if ($password == $db_password) {
                $_SESSION["email"] = $db_email;
                $_SESSION["username"] = $db_username;

                header("Location: ../view/main.php");
            }
        }
        
    } else {
        header("Location: ../view/login.php?error=Incorrect User name or password&email=$email");
    }


} else {
    header("Location: ../view/login.php?error=Enter the User name or password&email");
}