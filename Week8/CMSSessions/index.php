<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>MyTech Co. Ltd. Home</title>
        <meta name="description" content="MyTech Co. offers a range of high-quality offerings that can be viewed from our Products page.">
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
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Findex.php', __FILE__);
        ?>
    </body>
</html>