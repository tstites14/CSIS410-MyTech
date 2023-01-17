<html>
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8"/>

        <link rel="stylesheet" type="text/css" href="css/contactus.css" />
    </head>
    <body class='content'>
        <div class='content'>
            <div class='header'>
                <h1>Week 1: Foundations</h1>
                <h2>Liberty University Online CSIS 410: Web Enterprise Technologies</h2>
            </div>
            <div class = 'formData'>
                <p>
                    <?php 
                        echo "Contact us via:";
                        echo "<br/>";
                        echo "Email: support@mytech.com\n";
                        echo "<br/>";
                        echo "Phone: 123-456-7890";
                    ?>
                </p>
                <a class='menuList' href='menu.php'>Back</a>
            </div>
        </div>
        <footer class= 'footer'>
            <p><?php echo "This file was last modified on " . date("F d Y, H:i:s.", filemtime("menu.php")) ?></p>
            <p>Copyright © 2023 Theodore Stites</p>
        </footer>
    </body>
</html>