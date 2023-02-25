<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Existing Comments</title>

        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php 
            include "dbconnection.php";

            $db = new DBConnection();
            $data = $db->selectData("*", "comments");
        ?>
        <div class="content">
            <div class='header'>
                <h2>MyTech Co. Ltd.</h2>
                <h3>Comment System</h3>
            </div>

            <table>
                <colgroup>
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 15%;">
                    <col span="1" style="width: 15%;">
                    <col span="1" style="width: 55%;">
                    <col span="1" style="width: 5%;">
                </colgroup>

                <?php
                    while ($row = $data->fetch_assoc()) {
                        echo "<tr>";
                        echo    "<td>";
                        echo        "<div class='tableColumn'>";
                        echo            '<p>'. $row["commentdate"] . '</p>';
                        echo        "</div>";
                        echo    "</td>";
                        echo    "<td>";
                        echo        "<div class='tableColumn'>";
                        echo            '<p>'. $row["name"] . '</p>';
                        echo        "</div>";
                        echo    "</td>";
                        echo    "<td>";
                        echo        "<div class='tableColumn'>";
                        echo            '<p>'. $row["title"] . '</p>';
                        echo        "</div>";
                        echo    "</td>";
                        echo    "<td>";
                        echo        "<div class='tableColumn'>";
                        echo            '<p>'. $row["comments"] . '</p>';
                        echo        "</div>";
                        echo    "</td>";
                        echo    "<td>";
                        echo        "<div class='tableColumn'>";
                        echo            "<img src='img/delete.svg'>";
                        echo        "</div>";
                        echo    "</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
            <a href="index.php">Back</a>
        </div>

        <?php 
            include "../../footer.php";
            footer('', __FILE__);
        ?>
    </body>
</html>