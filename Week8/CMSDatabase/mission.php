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

            function generateMission() {
                $db = new DBConnection();
                $mission = $db->select("text", "mission");

                $i = 0;
                while ($row = $mission->fetch_assoc()) {
                    echo "<p>" . $row["text"] . "</p>";
                    echo "<br>";
                }
            }
        ?>

        <div class='content'>
            <h1>Our Mission</h1>
            <?php echo generateMission(); ?>
        </div>

        <?php
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Fmission.php', __FILE__);
        ?>
    </body>
</html>