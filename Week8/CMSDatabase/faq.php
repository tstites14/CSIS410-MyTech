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

            session_start();

            function generateFAQ() {
                $db = new DBConnection();
                $faq = $db->select("*", "faq");

                while ($row = $faq->fetch_assoc()) {
                    echo "<tr>";
                    echo    "<td>";
                    echo        "<h2>" . $row["title"] . "</h2>";
                    echo        "<p>" . $row["text"] . "</p>";
                    echo    "</td>";
                    if ((int)$_SESSION["authlevel"] > 1) {
                        echo    "<td>";
                        echo        "<a href='dbupdate.php?itemID=" . $row["id"] . "&table=" . "faq" . "'><img src='img/create.svg'></a>";
                        if ((int)$_SESSION["authlevel"] > 2) {
                            echo        "<a href='dbdelete.php?itemID=" . $row["id"] . "&table=" . "faq" . "'><img src='img/delete.svg'></a>";
                        }
                        echo    "</td>";
                    }
                    echo "</tr>";
                }
            }
        ?>

        <div class='content'>
            <h1>Frequently Asked Questions</h1>
            <table>
                    <colgroup>
                        <col span="1" style="width: 80%">
                        <col span="1" style="width: 20%">
                    </colgroup>

                    <?php generateFAQ(); ?>
                </table>
            <?php 
                if ((int)$_SESSION["authlevel"] > 2) {
                    echo "<form action='dbinsert.php' method='post'>";
                    echo    "<button class='button' type='submit' name='submit' value='faq'><img src='img/add.svg'></button>";
                    echo "</form>";
                }
            ?>
    </div>

        <?php
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Ffaq.php', __FILE__);
        ?>
    </body>
</html>