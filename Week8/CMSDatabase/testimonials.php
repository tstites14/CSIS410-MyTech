<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Testimonials</title>
        <meta name="description" content="My small business contacted MyTech Co. to work on an app for my business and their work was excellent. They worked with us to create a high-quality application and we would love to work with them again!">
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/testimonials.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php 
            include "header.php"; 
            include "dbconnection.php";

            function generateTestimonials() {
                $db = new DBConnection();
                $testimonials = $db->select("*", "testimonials");

                $i = 0;
                while ($row = $testimonials->fetch_assoc()) {
                    echo "<h2>" . $row["name"] . ", " . $row["title"] . "</h2>";
                    echo "<p>" . $row["comment"] . "</p>";
                    echo "<br>";
                }
            }
        ?>

        <div class='content'>
            <h1>Testimonials</h1>
            <br>
            <?php generateTestimonials(); ?>
        </div>

        <?php
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Ftestimonials.php', __FILE__);
        ?>
    </body>
</html>