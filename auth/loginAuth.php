<?php
session_start();

require "../config/db_connect.php";


if(isset($_POST['email']) && isset($_POST['pw']) 
    && !empty($_POST['email']) && !empty($_POST['pw'])) {


    $email = $_POST['email'];
    $pw = $_POST['pw'];

    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $sql = "SELECT * FROM users WHERE Email = :email";
        $stmt = $conn -> prepare($sql);
        $stmt -> execute(array(':email' => $email));
        $user = $stmt -> fetch();


        $user_email = $user['Email'];
        $user_password = $user['password'];
        $user_name = $user['name'];


        if ($email === $user_email) {
            if ($pw === $user_password) {
                $_SESSION['user_email'] = $user_email;
                $_SESSION['user_name'] = $user_name;

                header("Location: ../index.php");
            }
        }
        
    } else {
        header("Location: ../view/login.php?error=Incorrect User name or password&email=$email");

    }


} else {
    header("Location: ../viwelogin.php?error=Enter the User name or password&email=$email");
}
?>