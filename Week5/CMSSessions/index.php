<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>MyTech Co. Ltd. Home</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php include "header.php"; ?>

        <div class='content'>
            <h1>Welcome to MyTech Co.</h1>
            <table>
                <colgroup>
                    <col span="1" style="width: 50%;">
                    <col span="1" style="width: 50%;">
                </colgroup>

                <tr>
                    <td>
                        <div class='tableColumn'>
                            <h2>New Customers</h2>
                            <img src="img/new-customers.jpg" alt="Welcome new customers" draggable="false">
                            <p>MyTech Co. offers a range of high-quality offerings that can be viewed from our <a href="login.php">Products</a> page.</p>
                        </div>
                    </td>
                    <td>
                        <div class='tableColumn'>
                            <h2>Existing Customers</h2>
                            <img src="img/existing-customers.jpg" alt="Welcome existing customers" draggable="false">
                            <p>If you have already purchased our products, please visit the <a href="helpcenter.php">Help Center</a> to answer any questions you may have.</p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <?php 
            include "../../footer.php";
            footer('', __FILE__);
        ?>
    </body>
</html>