<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Our Products</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/storeproducts.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <!--Prevents any HTML from showing unless "auth" is set-->
        <?php 
            session_start();
            if (isset($_SESSION["authlevel"]) && $_SESSION["authlevel"] > 0) { 
        ?>
        <?php 

        ?>
        <div class="content">
            <?php 
                include "header.php";
                include "dbconnection.php";

                function generateProducts() {
                    $db = new DBConnection();
                    $items = $db->select("*", "storeitems");

                    $i = 0;
                    while ($row = $items->fetch_assoc()) {
                        //Get all the image urls from the imageurl field
                        $imgs = explode(",", $row["imageurl"]);

                        if ($i == 0)
                            echo "<tr>";

                        echo "<td>";
                        echo    "<div class='tableColumn'>";
                        foreach ($imgs as $img)
                            echo    "<img src=$img alt=''>";
                        echo        "<h3>" . $row["title"] . "</h3>";
                        echo        '<form action="shoppingcart.php" method="get">';
                        echo            '<button type="submit" name="newProduct" value="' . $row["id"] . '">Add to Cart</button>';
                        echo        "</form>";
                        echo    "</div>";
                        echo "</td>";

                        if ($i == 2) {
                            echo "</tr>";
                            $i = 0;
                        } else {
                            $i++;
                        }
                    }

                    if ($i != 0) {
                        echo "</tr>";
                    }
                }
            ?>
            <h2>Our Products</h1>
            <div class='checkout'>
                <p>
                    <?php 
                        if (isset($_SESSION["itemCount"])) {
                            echo $_SESSION["itemCount"];
                        } else {
                            echo "0";
                        }
                    ?>
                </p>
                <a href="shoppingcart.php"><img src="img/cart_icon.svg"></a>
            </div>

            <table>
                <colgroup>
                    <col span="1" style="width: 33%;">
                    <col span="1" style="width: 33%;">
                    <col span="1" style="width: 33%;">
                </colgroup>

                <?php generateProducts(); ?>
            </table>
        </div>

        <?php
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Fstoreproducts.php', __FILE__);
        ?>

        <!--If "auth" is not set, show alert box and redirect back to login page-->
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