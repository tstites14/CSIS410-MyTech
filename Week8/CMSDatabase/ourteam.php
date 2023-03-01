<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Our Team</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/ourteam.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <div class='content'>
            <?php 
                include "header.php"; 
                include "dbconnection.php";

                function generateEmployees($department) {
                    $db = new DBConnection();
                    $employees = $db->select("*", "employees", "department", $department);

                    $i = 0;
                    while ($row = $employees->fetch_assoc()) {
                        if ($i == 0)
                            echo "<tr>";

                        echo "<td>";
                        echo    "<div class='tableColumn'>";
                        echo        "<img src='" . $row["imageurl"] . "' alt='" . $row["name"] ."'>";
                        echo        "<h4>" . $row["name"] . ", " . $row["title"] . "</h4>";
                        echo        "<h4>" . $row["degree"] . "</h4>";
                        echo        "<h4>" . $row["email"] . "</h4>";
                        echo        "<h4>Interests: " . $row["interests"] . "</h4>";
                        echo    "</div>";
                        echo "</td>";

                        if ($i == 2) {
                            echo "</tr>";
                            $i = 0;
                        } else {
                            $i++;
                        }
                    }
                }
            ?>

            <div class='table'>
                <h1>Our Team</h1>
                <table>
                    <colgroup>
                        <col span="1" style="width: 33%;">
                        <col span="1" style="width: 33%;">
                        <col span="1" style="width: 33%;">
                    </colgroup>

                    <!--Executives Header-->
                    <tr>
                        <th></th>
                        <th>Executives</th>
                        <th></th>
                    </tr>
                    <!--Executives Content-->
                    <?php generateEmployees("Executive"); ?>
                    <!--Development Header-->
                    <tr>
                        <th></th>
                        <th>Development</th>
                        <th></th>
                    </tr>
                    <!--Development Content-->
                    <?php generateEmployees("Development"); ?>
                </table>
            </div>

            <?php 
                include "../../footer.php";
                footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Fourteam.php', __FILE__);
            ?>
        </div>
    </body>
</html>