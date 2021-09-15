<?php
session_start();

require "../config/db_connect.php";


if(isset($_POST["email"]) && isset($_POST["pwd"]) 
    && !empty($_POST["email"]) && !empty($_POST["pwd"])) {


    $email = $_POST["email"];
    $pw = $_POST["pwd"];

    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //Email 구문 검사
 
        $stmt = $conn -> prepare("SELECT * FROM users WHERE email = :email");
        $stmt -> execute(array(":email" => $email));
        $user = $stmt -> fetch();


        $email = $user["Email"];
        $pwd = $user["pwd"];
        $username = $user["name"];


        if ($email === $user_email) {
            if ($pwd === $pwd) {
                $_SESSION["email"] = $email;
                $_SESSION["username"] = $username;

                header("Location: ../index.php");
            }
        }
        
    } else {
        header("Location: ../view/login.php ?error=Incorrect User name or password&email=$email");

    }


} else {
    header("Location: ../view/login.php ?error=Enter the User name or password&email=$email");
}
?>