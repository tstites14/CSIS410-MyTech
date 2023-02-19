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
                header("Location: storeproducts.php");
            }
        ?>

        <div class='content'>
            <?php include "header.php"; ?>

            <form action="redirect.php" method="post">
                Username*: <input class="textbox" type="text" name="username" value="" required>
                <br>
                Password*: <input class="textbox" type="password" name="password" value="" required>
                <br>
                <input class="button" type="submit" name="submit" value="Submit">
            </form>
        </div>

        <?php
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Flogin.php', __FILE__);
        ?>
    </body>
</html>