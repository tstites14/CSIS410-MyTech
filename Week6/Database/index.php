<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Home</title>

        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php 
            session_start();
            if (isset($_SESSION["authlevel"]) && $_SESSION["authlevel"] > 0) { 
        ?>
        <div class="content">
            <div class='header'>
                <h1>MyTech Co. Ltd.</h1>
                <h2>Comment System</h2>
            </div>

            <div class="buttons">
                <a href="newcomment.php">Add New Comment</a>
                <a href="existingcomments.php">Read Existing Comments</a>
                <br>
                <a href="../../index.php">Back</a>
            </div>
        </div>

        <?php 
            include "../../footer.php";
            footer('', __FILE__);
        ?>
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