<?php
    session_start();

    if(isset($_SESSION['user_name']) && isset($_SESSION['user_email'])) {
        header("Location: ./view/main.php");
    } else {
        header("Location: ./view/login.php");
    }

?>



