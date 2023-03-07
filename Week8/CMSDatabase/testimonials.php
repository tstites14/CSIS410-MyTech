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

            session_start();

            function generateTestimonials() {
                $db = new DBConnection();
                $testimonials = $db->select("*", "testimonials", NULL, NULL, "id", "ASC");

                while ($row = $testimonials->fetch_assoc()) {
                    echo "<tr>";
                    echo    "<td>";
                    echo        "<h2>" . $row["title"] . "</h2>";
                    echo        "<p>" . $row["text"] . "</p>";
                    echo    "</td>";
                    if ((int)$_SESSION["authlevel"] > 1) {
                        echo    "<td>";
                        echo        "<a href='dbupdate.php?itemID=" . $row["id"] . "&table=" . "testimonials" . "&content=" . $row["text"] . "'><img src='img/create.svg'></a>";
                        if ((int)$_SESSION["authlevel"] > 2) {
                            echo        "<a href='dbdelete.php?itemID=" . $row["id"] . "&table=" . "testimonials" . "'><img src='img/delete.svg'></a>";
                        }
                        echo    "</td>";
                    }
                    echo "</tr>";
                }
            }
        ?>

        <div class='content'>
            <h1>Testimonials</h1>
            <table>
                    <colgroup>
                        <col span="1" style="width: 80%">
                        <col span="1" style="width: 20%">
                    </colgroup>

                    <?php generateTestimonials(); ?>
                </table>
            <?php 
                if ((int)$_SESSION["authlevel"] > 2) {
                    echo "<form action='dbinsert.php?title=true' method='post'>";
                    echo    "<button class='button' type='submit' name='submit' value='testimonials'><img src='img/add.svg'></button>";
                    echo "</form>";
                }
            ?>
        </div>

        <?php
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Ftestimonials.php', __FILE__);
        ?>
    </body>
</html>