<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Log In</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">        
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php 
            session_start();
            if(isset($_SESSION["authlevel"]) && $_SESSION["authlevel"] > 0) {
                header("Location: index.php");
            }
        ?>

        <div class='content'>
            <?php include "header.php"; ?>

            <div class='header'>
                <h1>MyTech Co. Ltd.</h1>
                <h2>Account Management</h2>
            </div>
            <div class='formData'>
                <h1>Log in</h1>
                <form action="redirect.php" method="post">
                    Username*: <input class="textbox" type="text" name="username" value="" required>
                    <br>
                    Password*: <input class="textbox" type="password" name="password" value="" required>
                    <br>
                    <input class="button" type="submit" name="submit" value="Submit">
                </form>
            <a href="../../index.php">Back</a>
            </div>
        </div>

        <?php
            include "../../footer.php";
            footer('', __FILE__);
        ?>
    </body>
</html>