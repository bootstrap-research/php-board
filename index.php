<?php
    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['email'])) {
        header("Location: ./view/main.php");
    } else {
        header("Location: ./view/login.php");
    }

?>



