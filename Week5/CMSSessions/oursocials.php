<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Our Socials</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/oursocials.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php include "header.php"; ?>

        <div class='content'>
            <h1>Our Socials</h1>
            
            <table>
                    <colgroup>
                        <col span="1" style="width: 33%;">
                        <col span="1" style="width: 33%;">
                        <col span="1" style="width: 33%;">
                    </colgroup>

                    <tr>
                        <td>
                            <div class='tableColumn'>
                                <a href="https://www.facebook.com/mytechcoltd.sf/"><img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Facebook_icon_2013.svg" alt="Facebook" draggable="false"></a>
                            </div>
                        </td>
                        <td>
                            <div class='tableColumn'>
                                <a href="https://www.instagram.com/mytechco/"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" alt="Instagram" draggable="false"></a>
                            </div>
                        </td>
                        <td>
                            <div class='tableColumn'>
                                <a href="https://twitter.com/mytechco/"><img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Twitter-logo.svg" alt="Twitter" draggable="false"></a>
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