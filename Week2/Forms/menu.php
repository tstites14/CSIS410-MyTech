<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Forms Menu</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <div class='content'>
            <div class='header'>
                <h1>Week 2: Forms</h1>
                <h2>Liberty University Online CSIS 410: Web Enterprise Technologies</h2>
            </div>
            <div class='menuList'>
                <h2>Forms</h2>
                <ul>
                    <li><a href='getform.php'>GET Form</a></li>
                    <li><a href='postform.php'>POST Form</a></li>
                </ul>
                <br>
                <ul>
                    <li><a href='../../index.php'>Back</a></li>
                </ul>
            </div>
        </div>

        <!--Footer-->
        <?php 
            include "../../footer.php";
            footer("https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek2%2FForms%2Fmenu.php", __FILE__);
        ?>
    </body>
</html>