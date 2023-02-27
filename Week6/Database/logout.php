<?php 
    session_start();
    if (isset($_SESSION["authlevel"])) {
        session_destroy();

        header("Location: login.php");
    } else {
        echo 'NO SESSION';
    }
?>