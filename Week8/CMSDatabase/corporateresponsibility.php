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

            session_start();

            function generateCR() {
                $db = new DBConnection();
                $cr = $db->select("*", "corporesponsibility");

                while ($row = $cr->fetch_assoc()) {
                    echo "<tr>";
                    echo    "<td>";
                    echo        "<p>" . $row["text"] . "</p>";
                    echo    "</td>";
                    if ((int)$_SESSION["authlevel"] > 1) {
                        echo    "<td>";
                        echo        "<a href='dbupdate.php?itemID=" . $row["id"] . "&table=" . "corporesponsibility" . "&content=" . $row["text"] . "'><img src='img/create.svg'></a>";
                        if ((int)$_SESSION["authlevel"] > 2) {
                            echo    "<a href='dbdelete.php?itemID=" . $row["id"] . "&table=" . "corporesponsibility" . "'><img src='img/delete.svg'></a>";
                        }
                        echo    "</td>";
                    }
                    echo "</tr>";
                }
            }
        ?>

        <div class='text'>
            <h1>Corporate Responsibility</h1>
            <h2>Our Donations</h2>
            <table>
                    <colgroup>
                        <col span="1" style="width: 80%">
                        <col span="1" style="width: 20%">
                    </colgroup>

                    <?php generateCR(); ?>
                </table>
                <?php 
                    if ((int)$_SESSION["authlevel"] > 2) {
                        echo "<form action='dbinsert.php' method='post'>";
                        echo    "<button class='button' type='submit' name='submit' value='corporesponsibility'><img src='img/add.svg'></button>";
                        echo "</form>";
                    }
                ?>
        </div>

        <?php
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Fcorporateresponsibility.php', __FILE__);
        ?>
    </body>
</html>