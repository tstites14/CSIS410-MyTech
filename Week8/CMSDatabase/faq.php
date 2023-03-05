<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Frequently Asked Questions</title>
        <meta name="description" content="We receive certain questions many times, and so we have compiled all the answers to these and more in our FAQ.">
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/faq.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
    <?php 
            include "header.php"; 
            include "dbconnection.php";

            function generateFAQ() {
                $db = new DBConnection();
                $faq = $db->select("*", "faq");

                $i = 0;
                while ($row = $faq->fetch_assoc()) {
                    echo "<h2>" . $row["title"] . "</h2>";
                    echo "<p>" . $row["text"] . "</p>";
                }
            }
        ?>

        <div class='content'>
            <h1>Frequently Asked Questions</h1>
            <?php generateFAQ(); ?>
        </div>

        <?php
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Ffaq.php', __FILE__);
        ?>
    </body>
</html>