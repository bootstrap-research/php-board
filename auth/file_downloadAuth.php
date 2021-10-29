<?php

require "../config/db_connect.php";

if(isset($_GET['filename'])) {
    $filename = $_GET['filename'];
    $stmt = $conn -> prepare("SELECT * FROM library where filename=?");
    $stmt -> execute(array($filename));
    $data = $stmt -> fetch();  


    $file = 'file/'.$data['filename'];

    if(file_exists($file)){
        header('Content-Description: '.$data['disposition'].'; filename ="'.basename($file).'"');
        header('Content-Description: '.$data['description']);
        header('Content-Lenght: '.filesize($file));
        header('Content-Type: '.$data['type']);
        header('Cache-Control: '.$data['cache']);
        header('Expires: '.$data['expires']);
        header('Pragma: '.$data['pregma']);
        readfile($file);
        exit;
    }

print_r();
}
?>
