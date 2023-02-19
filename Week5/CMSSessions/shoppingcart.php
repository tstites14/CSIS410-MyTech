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
        <div class="content">
            <?php include "header.php"; ?>

            <!--Prevents any HTML from showing unless "auth" is set-->
            <?php 
                session_start();
                if (isset($_SESSION["authlevel"]) && $_SESSION["authlevel"] > 0) { 
            ?>

            <h1>Shopping Cart</h1>

            <?php
                if (isset($_POST["newProduct"])) {
                    //Increment itemCount
                    if (isset($_SESSION["itemCount"]))
                        $_SESSION["itemCount"]++;
                    else
                        $_SESSION["itemCount"] = 1;
                }
            ?>
                    
            <ul>
                <?php 
                    $cart = new ShoppingCart();
                    if (isset($_POST["newProduct"]))
                        $cart->add_item(new CartItem($_POST["newProduct"]));

                    $items = $cart->get_items();
                    foreach ($items as $item) {
                        $cart->addNewItemHTML($item);
                    }

                    if (isset($_POST["newProduct"]))
                        $cart->save_state();
                ?>
            </ul>
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
            <form action="checkout.php" method="post">
                <button type="submit" name="totalPrice" value="<?php echo $totalPrice; ?>">Check Out</button>
            </form>

            <?php
                include "../../footer.php";
                footer('', __FILE__);
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