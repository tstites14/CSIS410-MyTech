<!DOCTYPE html>
<html lang='en-US'>
    <head>
        <title>About Us</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/aboutus.css">
    </head>
    <body class='content'>
        <div class='content'>
            <div class='header'>
                <h1>MyTech Co. Ltd.</h1>
                <h2>About Us</h2>
            </div>
            <div class = 'formData'>
                <p>
                    <?php 
                        echo "MyTech Co. Ltd. is a sofware development studio with a focus on creating innovative and responsive mobile applications. Our mission is to provide our clients with professional mobile applications that suit their vision for their organization.";
                        echo "<br><br>";
                        echo "Based in San Francisco, California, MyTech Co. Ltd. is prepared to create professional software based on your own ideas. Our team of developers look forward to receiving your inquiry about our services!";
                    ?>
                </p>
                <a class='menuList' href='menu.php'>Back</a>
            </div>
        </div>
        <footer class= 'footer'>
            <p><?php echo "This file was last modified on " . date("F d Y, H:i:s.", filemtime("aboutus.php")) ?></p>
            <p>Copyright © 2023 Theodore Stites</p>
            <input type="image" src="../../xhtml11.png" name="validation" alt="https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek1%2FFoundations%2Faboutus.php" onclick="window.location='https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek1%2FFoundations%2Faboutus.php'">
        </footer>
    </body>
</html>