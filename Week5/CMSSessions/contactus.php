<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Contact Us</title>
        <meta name="description" content="If you have any questions, feel free to ask them here.">
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/contactus.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php include "header.php"; ?>

        <div class='content'>
            <h1>Contact Us</h1>

            <form onsubmit="alert('Thank you for your interest! We will respond as soon as we are able!')" method="post">
                Name*: <input class="textbox" type="text" name="name" value="" required>
                <br>
                Email address*: <input class="textbox" type="text" name="email" value="" required>
                <br>
                Comments*: <input class="textbox" type="text" name="comments" value="" required>
                <br>
                <input id="submit" type="submit">
            </form>
        </div>

        <?php
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Fcontactus.php', __FILE__);
        ?>
    </body>
</html>