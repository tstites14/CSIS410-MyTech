<html>
    <head>
        <title>Foundations Menu</title>
        <meta charset="utf-8"/>

        <link rel="stylesheet" type="text/css" href="css/menu.css" />
    </head>
    <body class='content'>
        <div class='content'>
            <div class='header'>
                <h1>Week 1: Foundations</h1>
                <h2>Liberty University Online CSIS 410: Web Enterprise Technologies</h2>
            </div>
            <div class = 'menuList'>
                <ul>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="hosting.php">Hosting Information</a></li>
                </ul>
            </div>
        </div>
        <footer class= 'footer'>
            <p><?php echo "This file was last modified on " . date("F d Y, H:i:s.", filemtime("menu.php")) ?></p>
            <p>Copyright © 2023 Theodore Stites</p>
        </footer>
    </body>
</html>