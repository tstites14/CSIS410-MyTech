<!DOCTYPE html>
<html lang='en-US'>
    <head>
        <title>Foundations Menu</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body class='content'>
        <div class='content'>
            <div class='header'>
                <h1>Week 1: Foundations</h1>
                <h2>Liberty University Online CSIS 410: Web Enterprise Technologies</h2>
            </div>
            <div class = 'menuList'>
                <ul>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="hosting.php">Hosting Information</a></li>
                </ul>
                <br><br>
                <a href="../../index.php">Back</a>
            </div>
        </div>

        <?php 
            include '../../footer.php';
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek1%2FFoundations%2Fmenu.php', __FILE__);
        ?>
    </body>
</html>