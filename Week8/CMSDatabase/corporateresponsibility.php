<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Corporate Responsibility</title>
        <meta name="description" content="We have donated to the Water Project to provide water to struggling communities in Africa.">
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/corporateresponsibility.css">        
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php 
            include "header.php"; 
            include "dbconnection.php";

            function generateCR() {
                $db = new DBConnection();
                $cr = $db->select("text", "corporesponsibility");

                while ($row = $cr->fetch_assoc()) {
                    echo "<p>" . $row["text"] . "</p>";
                    echo "<br>";
                }
            }
        ?>

        <div class='content'>
            <h1>Corporate Responsibility</h1>
            <h2>Our Donations</h2>
            <?php generateCR(); ?>
        </div>

        <?php
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Fcorporateresponsibility.php', __FILE__);
        ?>
    </body>
</html>