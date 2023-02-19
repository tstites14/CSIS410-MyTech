<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Checkout</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/checkout.css">
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

            <table>
                <colgroup>
                    <col span="1" style="width: 50%;">
                    <col span="1" style="width: 50%;">
                </colgroup>

                <tr>
                    <td>
                        <div class='tableColumn'>
                            <h2>Subtotal: $<?php echo $_POST["totalPrice"]; ?></h2>
                            <h2>Tax: $<?php echo round($_POST["totalPrice"] * 0.06625, 2) ?></h2>
                            <h2>Total: $<?php echo $_POST["totalPrice"] + (round($_POST["totalPrice"] * 0.06625, 2))?></h2>
                        </div>
                    </td>
                    <td>
                        <div class='tableColumn'>
                            <form action="checkoutconfirmation.php" method="post">
                                Name*: <input type="text" name="" value="" required>
                                <br>
                                Address*: <input type="text" name="" value="" required>
                                <br>
                                City*: <input type="text" name="" value="" required>
                                <br>
                                State*: <input type="text" name="" value="" required>
                                <br>
                                ZIP Code*: <input type="numeric" name="" value="" required>
                                <br><br>
                                Card Number*: <input type="tel" minlength="19" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" pattern="[0-9\s]{13,19}" name="" value="" required>
                                <br>
                                Expiration Date*: <input type="month" name="" value="" required>
                                <br>
                                CVV*: <input id="cvv" type="numeric" minlength="3" maxlength="3" name="" value="" required>
                                <br>
                                Email Address*: <input type="email" name="" value="" required>
                                <button type="submit" name="submit" value="<?php echo $_POST["totalPrice"] + (round($_POST["totalPrice"] * 0.06625, 2)) ?>">Submit</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <?php
            include "../../footer.php";
            footer('', __FILE__);
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