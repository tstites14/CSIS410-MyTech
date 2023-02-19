<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Checkout Confirmation</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/checkoutconfirmation.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">

        <?php include "cartitems.php"; ?>
    </head>
    <body>
        <!--Prevents any HTML from showing unless "auth" is set-->
        <?php 
            session_start();
            if (isset($_SESSION["authlevel"]) && $_SESSION["authlevel"] > 0) { 
        ?>
        <div class="content">
            <?php include "header.php"; ?>
            <div class="confirmation">
                <h1>Thank you for your order!</h1>
                <h2>We will be in touch shortly regarding the next steps of your app(s).</h2>
                <?php 
                    $_SESSION["items"] = null; 
                    $_SESSION["itemCount"] = 0;
                ?>

                <a href="index.php"><button name="back">Back</button></a>
            </div>

            <?php
                include "../../footer.php";
                footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Fcheckoutconfirmation.php', __FILE__);
            ?>
        </div>

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