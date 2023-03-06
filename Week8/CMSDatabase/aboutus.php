<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>About Us</title>
        <meta name="description" content="MyTech Co. Ltd. is a sofware development studio with a focus on creating innovative and responsive mobile applications.">
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/aboutus.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <div class='content'>
        <?php 
            include "header.php"; 
            include "dbconnection.php";

            function generateAboutUs() {
                $db = new DBConnection();
                $aboutUs = $db->select("*", "aboutus");

                while ($row = $aboutUs->fetch_assoc()) {
                    echo "<tr>";
                    echo    "<td>";
                    echo        "<p>" . $row["text"] . "</p>";
                    echo    "</td>";
                    echo    "<td>";
                    echo        "<a href='dbupdate.php?itemID=" . $row["id"] . "&table=" . "aboutus" . "'><img src='img/create.svg'></a>";
                    echo        "<a href='dbdelete.php?itemID=" . $row["id"] . "&table=" . "aboutus" . "'><img src='img/delete.svg'></a>";
                    echo    "</td>";
                    echo "</tr>";
                }
            }
        ?>

            <div class='text'>
                <h1>About Us</h1>
                <table>
                    <colgroup>
                        <col span="1" style="width: 80%">
                        <col span="1" style="width: 20%">
                    </colgroup>

                    <?php generateAboutUs(); ?>
                </table>

                <form action="dbinsert.php" method="post">
                    <button class='button' type='submit' name='submit' value="aboutus"><img src='img/add.svg'></button>
                </form>
            </div>

            <?php 
                include "../../footer.php";
                footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Faboutus.php', __FILE__);
            ?>
        </div>
    </body>
</html>