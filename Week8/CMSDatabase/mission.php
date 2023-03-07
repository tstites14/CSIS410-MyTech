<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Mission</title>
        <meta name="description" content="Software development is a tough business. We know this as well as anyone. There are hundreds of other companies that you could turn to in order to create your dream app.">
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/mission.css">        
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php 
            include "header.php"; 
            include "dbconnection.php";

            session_start();

            function generateMission() {
                $db = new DBConnection();
                $mission = $db->select("*", "mission", NULL, NULL, "id", "ASC");

                while ($row = $mission->fetch_assoc()) {
                    echo "<tr>";
                    echo    "<td>";
                    echo        "<p>" . $row["text"] . "</p>";
                    echo    "</td>";
                    if ((int)$_SESSION["authlevel"] > 1) {
                        echo    "<td>";
                        echo        "<a href='dbupdate.php?itemID=" . $row["id"] . "&table=" . "mission" . "'><img src='img/create.svg'></a>";
                        if ((int)$_SESSION["authlevel"] > 2) {
                            echo        "<a href='dbdelete.php?itemID=" . $row["id"] . "&table=" . "mission" . "'><img src='img/delete.svg'></a>";
                        }
                        echo    "</td>";
                    }
                    echo "</tr>";
                }
            }
        ?>

        <div class='content'>
            <h1>Our Mission</h1>
            <table>
                    <colgroup>
                        <col span="1" style="width: 80%">
                        <col span="1" style="width: 20%">
                    </colgroup>

                    <?php generateMission(); ?>
                </table>
                <?php 
                    if ((int)$_SESSION["authlevel"] > 2) {
                        echo "<form action='dbinsert.php' method='post'>";
                        echo    "<button class='button' type='submit' name='submit' value='mission'><img src='img/add.svg'></button>";
                        echo "</form>";
                    }
                ?>
        </div>

        <?php
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Fmission.php', __FILE__);
        ?>
    </body>
</html>