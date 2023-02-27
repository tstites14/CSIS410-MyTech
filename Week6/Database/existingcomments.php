<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Existing Comments</title>

        <link rel="stylesheet" type="text/css" href="css/existingcomments.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php 
            session_start();
            if (isset($_SESSION["authlevel"]) && $_SESSION["authlevel"] > 0) { 
        ?>
        <?php
            include "dbconnection.php";

            $db = new DBConnection();
            $data = $db->selectData("*", "comments");
        ?>
        <div class="content">
            <div class='header'>
                <h1>MyTech Co. Ltd.</h1>
                <h2>Comment System</h2>
            </div>

            <div class='tableContents'>
                <table>
                    <colgroup>
                        <col span="1" style="width: 10%;">
                        <col span="1" style="width: 15%;">
                        <col span="1" style="width: 15%;">
                        <col span="1" style="width: 50%;">
                        <col span="1" style="width: 5%;">
                        <col span="1" style="width: 5%;">
                    </colgroup>
                    <tr>
                        <th>Comment Date</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Comment</th>
                    </tr>

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
                            echo            "<form action='updatecomments.php' method='post'>";
                            echo                "<input type='hidden' name='name' value = '" . $row["name"] . "'>";
                            echo                "<input type='hidden' name='title' value = '" . $row["title"] . "'>";
                            echo                "<input type='hidden' name='comments' value = '" . $row["comments"] . "'>";
                            echo                "<button class='button' type='submit' name='submit' value='" . $row["commentdate"] . "'><img src='img/create.svg'></button>";
                            echo            "</form>";
                            echo        "</div>";
                            echo    "</td>";
                            echo    "<td>";
                            echo        "<div class='tableColumn'>";
                            echo            "<form action='dbdelete.php' method='post'>";
                            echo                "<button class='button' type='submit' name='submit' value='" . $row["commentdate"] . "'><img src='img/delete.svg'></button>";
                            echo            "</form>";
                            echo        "</div>";
                            echo    "</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
                <form action='newcomment.php' method='post'>
                    <button class='button' type='submit' name='submit'><img src='img/add.svg'></button>
                </form>
                <a href="index.php">Back</a>
            </div>
        </div>
            

        <?php 
            include "../../footer.php";
            footer('', __FILE__);
        ?>
        <?php
            } else {
                echo "<script>";
                echo "alert('You are not authorized to view this content.');";
                echo 'window.location.href="login.php";';
                echo "</script>";
            }
        ?>
    </body>
</html>