<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Our Products</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
    </head>
    <body>
        <?php include "header.php"; ?>

        <!--Prevents any HTML from showing unless "auth" is set-->
        <?php 
            session_start();
            if (isset($_SESSION["authlevel"]) && $_SESSION["authlevel"] > 0) { 
        ?>

        <?php
            include "../../footer.php";
            footer('', __FILE__);
        ?>

        <!--If "auth" is not set, show alert box and redirect back to login page-->
        <?php
            } else {
                echo "<script>";
                echo "alert('You are not authorized to view this content.');";
                echo 'window.location.href="login.php";';
                echo "</script>";
            }
        ?>
    </body>
</html>