<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">

        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php include "header.php"; ?>

        <div class='text'>
            <h1>Contact Us</h1>

            <form onsubmit="alert('Thank you for your interest! We will respond as soon as we are able!')" method="post">
                Name*: <input type="text" name="name" value="" required>
                <br>
                Email address*: <input type="text" name="email" value="" required>
                <br>
                Comments*: <input type="text" name="comments" value="" required>
                <br>
                <input type="submit">
            </form>
        </div>

        <?php
            include "../../footer.php";
            footer('', __FILE__);
        ?>
    </body>
</html>