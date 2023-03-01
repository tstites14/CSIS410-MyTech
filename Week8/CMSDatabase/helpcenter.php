<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Help Center</title>
        <meta name="description" content="We receive certain questions many times, and so we have compiled all the answers to these and more in our FAQ.">
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/helpcenter.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php include "header.php"; ?>

        <div class='content'>
            <h1>Help Center</h1>

            <table>
                <colgroup>
                    <col span="1" style="width: 50%;">
                    <col span="1" style="width: 50%;">
                </colgroup>

                <tr>
                    <td>
                        <div class='tableColumn'>
                            <h2>Frequently Asked Questions</h2>
                            <a href="faq.php"><img src="img/faq.jpg" alt="faq"></a>
                            <p>We receive certain questions many times, and so we have compiled all the answers to these and more in our <a href="faq.php">FAQ</a>.</p>
                        </div>
                    </td>
                    <td>
                        <div class='tableColumn'>
                            <h2>Contact Us</h2>
                            <a href="contactus.php"><img src="img/contact-us.jpg" alt="contact us"></a>
                            <p>If you have any questions that haven't been answered by our <a href="faq.php">FAQ</a>, feel free to <a href="contactus.php">contact us</a> and we would be glad to assist you further.</p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <?php
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Fhelpcenter.php', __FILE__);
        ?>
    </body>
</html>