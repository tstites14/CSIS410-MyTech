<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Home</title>

        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php 
            //Storing sensitive db information outside of webroot prevents easy collection of my real web server login
            $config = parse_ini_file("../../../dbconnection.ini", true)["csis410"];
            $connection = new mysqli($config["host"], $config["username"], $config["password"], $config["db"]);

            if (!mysqli_connect_error()) {
        ?>
        <div class="content">
            <div class='header'>
                <h2>MyTech Co. Ltd.</h2>
                <h3>Comment System</h3>
            </div>

            <a href="newcomment.php">Add New Comment</a>
            <a href="existingcomments.php">Read Existing Comments</a>
        </div>

        <?php
            }
        ?>
        <?php 
            include "../../footer.php";
            footer('', __FILE__);
        ?>
    </body>
</html>