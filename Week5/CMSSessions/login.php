<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Log In</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
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
                Username: <input class="textbox" type="text" name="username" value="">
                <br>
                Password: <input class="textbox" type="password" name="password" value="">
                <br>
                <input class="button" type="submit" name="submit" value="Submit">
            </form>
        </div>

        <?php
            include "../../footer.php";
            footer('', __FILE__);
        ?>
    </body>
</html>