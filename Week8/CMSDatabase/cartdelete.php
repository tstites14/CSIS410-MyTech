<?php
    include "cartitems.php";

    session_start();
    $count = count($_SESSION["items"]);

    for ($i = 0; $i < $count; $i++) {
        $cItem = unserialize($_SESSION["items"][$i]);

        if ($_GET["itemID"] == $cItem->get_id()) {
            echo $cItem->get_name();
            array_splice($_SESSION["items"], $i, 1);
            echo "SUCCESS";

            $_SESSION["itemCount"]  -= 1;
            break;
        }
    }
    unset($i);

    echo "<script>window.location.href='shoppingcart.php';</script>";
?>