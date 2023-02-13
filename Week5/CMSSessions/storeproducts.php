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
        <div class="content">
            <?php include "header.php"; ?>

            <!--Prevents any HTML from showing unless "auth" is set-->
            <?php 
                session_start();
                if (isset($_SESSION["authlevel"]) && $_SESSION["authlevel"] > 0) { 
            ?>
            <h2>Our Products</h1>

            <table>
                <colgroup>
                    <col span="1" style="width: 33%;">
                    <col span="1" style="width: 33%;">
                    <col span="1" style="width: 33%;">
                </colgroup>

                <tr>
                    <td>
                        <div class='tableColumn'>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Android_logo_2019_%28stacked%29.svg" alt="Android development">
                            <h3>Android App</h3>
                            <form action="" method="post">
                                <button type="submit" name="a1" value="a1">Add to cart</button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div class='tableColumn'>
                            <img src='https://upload.wikimedia.org/wikipedia/commons/6/63/IOS_wordmark_%282017%29.svg' alt="iOS development">
                            <h3>iOS App</h3>
                            <form action="" method="post">
                                <button type="submit" name="i1" value="i1">Add to cart</button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div class='tableColumn'>
                            <img src='https://upload.wikimedia.org/wikipedia/commons/6/64/Android_logo_2019_%28stacked%29.svg' alt="Android development">
                            <img src='https://upload.wikimedia.org/wikipedia/commons/6/63/IOS_wordmark_%282017%29.svg' alt="iOS development">
                            <h3>Android and iOS App</h3>
                            <form action="" method="post">
                                <button type="submit" name="c1" value="c1">Add to cart</button>
                            </form>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class='tableColumn'>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Android_logo_2019_%28stacked%29.svg" alt="Android development">
                            <h3>Priority Support for Android Apps</h3>
                            <form action="" method="post">
                                <button type="submit" name="a2" value="a2">Add to cart</button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div class='tableColumn'>
                            <img src='https://upload.wikimedia.org/wikipedia/commons/6/63/IOS_wordmark_%282017%29.svg' alt="iOS development">
                            <h3>Priority Support for iOS Apps</h3>
                            <form action="" method="post">
                                <button type="submit" name="i2" value="i2">Add to cart</button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div class='tableColumn'>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Android_logo_2019_%28stacked%29.svg" alt="Android development">
                            <img src='https://upload.wikimedia.org/wikipedia/commons/6/63/IOS_wordmark_%282017%29.svg' alt="iOS development">
                            <h3>Priority Support for Android and iOS Apps</h3>
                            <form action="" method="post">
                                <button type="submit" name="c2" value="c2">Add to cart</button>
                            </form>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class='tableColumn'>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Android_logo_2019_%28stacked%29.svg" alt="Android development">
                            <h3>Additional Updates for Android Apps</h3>
                            <form action="" method="post">
                                <button type="submit" name="a3" value="a3">Add to cart</button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div class='tableColumn'>
                            <img src='https://upload.wikimedia.org/wikipedia/commons/6/63/IOS_wordmark_%282017%29.svg' alt="iOS development">
                            <h3>Additional Updates for iOS Apps</h3>
                            <form action="" method="post">
                                <button type="submit" name="i3" value="i3">Add to cart</button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div class='tableColumn'>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Android_logo_2019_%28stacked%29.svg" alt="Android development">
                            <img src='https://upload.wikimedia.org/wikipedia/commons/6/63/IOS_wordmark_%282017%29.svg' alt="iOS development">
                            <h3>Additional Updates for Android and iOS Apps</h3>
                            <form action="" method="post">
                                <button type="submit" name="c3" value="c3">Add to cart</button>
                            </form>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <div class='tableColumn'>
                            <img src="" alt="WIP">
                            <h3></h3>
                        </div>
                    </td>
                    <td></td>
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