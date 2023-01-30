<!DOCTYPE html>
<html lang='en-US'>
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/contactus.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body class='content'>
        <div class='content'>
            <div class='header'>
                <h1>MyTech Co. Ltd.</h1>
                <h2>Contact Us</h2>
            </div>
            <div class = 'formData'>
                <p>
                    <?php 
                        echo "Contact us via:";
                        echo "<br>";
                        echo "Email: support@mytech.com\n";
                        echo "<br>";
                        echo "Phone: 123-456-7890";
                    ?>
                </p>
                <a class='menuList' href='menu.php'>Back</a>
            </div>
        </div>
        
        <?php 
            include '../../footer.php';
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek1%2FFoundations%2Fcontactus.php', __FILE__);
        ?>
    </body>
</html>