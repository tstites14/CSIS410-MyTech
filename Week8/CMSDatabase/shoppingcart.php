<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Your Cart</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/shoppingcart.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">

        <?php include "cartitems.php"; ?>
    </head>
    <body>
        <!--Prevents any HTML from showing unless "auth" is set-->
        <?php 
            session_start();
            if (isset($_SESSION["authlevel"]) && $_SESSION["authlevel"] > 0) { 
        ?>

        <div class="content">
            <?php include "header.php"; ?>
            <h1>Shopping Cart</h1>

            <?php
                //Counter on storeproducts.php
                if (isset($_GET["newProduct"])) {
                    //Increment itemCount
                    if (isset($_SESSION["itemCount"]) && $_SESSION["itemCount"] >= 0)
                        $_SESSION["itemCount"]++;
                    else if (!isset($_SESSION["itemCount"]))
                        $_SESSION["itemCount"] = 1;
                    else if ($_SESSION["itemCount"] <= 0) {
                        $_SESSION["itemCount"] = 0;
                    }
                }
            ?>
                    
            <table>
                <colgroup>
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 70%;">
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 10%;">
                </colgroup>

                <?php 
                    $cart = new ShoppingCart();
                    if (isset($_GET["newProduct"])) {
                        $cart->add_item(new CartItem($_GET["newProduct"]));
                        $cart->save_state();
                    }

                    $items = $cart->get_items();
                    foreach ($items as $item) {
                        $cart->addNewItemHTML($item);
                    }
                    unset($item);
                ?>
            </table>
            <hr>
            <p>
                <?php 
                    $totalPrice = 0;
                    foreach ($items as $item) {
                        $totalPrice += $item->get_price();
                    }

                    echo "<h3>$" . $totalPrice . "</h3>";
                ?>
            </p>
            <a href="storeproducts.php"><button name="Back" value="Back">Back</button></a>
            <form action="checkout.php" method="post">
                <button type="submit" name="totalPrice" value="<?php echo $totalPrice; ?>">Check Out</button>
            </form>

            <?php
                include "../../footer.php";
                footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Fshoppingcart.php', __FILE__);
            ?>
        </div>

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