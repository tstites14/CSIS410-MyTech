<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Help Center</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php include "header.php"; ?>

        <div class='text'>
            <h1>Help Center</h1>

            <table>
                <colgroup>
                    <col span="1" style="width: 50%;">
                    <col span="1" style="width: 50%;">
                </colgroup>

                <tr>
                    <td>
                        <div class='tableColumn'>
                            <a href="contactus.php"><img src="img/contact-us.jpg" alt="contact us"></a>
                        </div>
                    </td>
                    <td>
                        <div class='tableColumn'>
                            <a href="faq.php"><img src="img/faq.jpg" alt="faq"></a>
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