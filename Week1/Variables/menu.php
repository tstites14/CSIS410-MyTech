<!DOCTYPE html>
<html lang='en-US'>
    <head>
        <title>Variables Menu</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/menu.css">
    </head>
    <body class='content'>
        <div class='content'>
                <div class='header'>
                    <h1>MyTech Co. Ltd.</h1>
                    <h2>Our Team</h2>
                </div>
                <div class='employeeList'>
                    <h3>Executives</h3>
                    <ul>
                        <li><a href='ericpowers.php'>Eric Powers</a></li>
                        <li><a href='fredericknewman.php'>Frederick Newman</a></li>
                        <li><a href='michellepatton.php'>Michelle Patton</a></li>
                    </ul>
                    <h3>Development Team</h3>
                    <ul>
                        <li><a href='hannahdelaney.php'>Hannah Delaney</a></li>
                        <li><a href='jameswilliams.php'>James Williams</a></li>
                        <li><a href='natalieharvey.php'>Natalie Harvey</a></li>
                        <li><a href='johnemerson.php'>John Emerson</a></li>
                    </ul>
                    <br><br>
                    <a href='../../index.php'>Back</a>
                </div>
        </div>
        <footer class= 'footer'>
            <p><?php echo "This file was last modified on " . date("F d Y, H:i:s.", filemtime("menu.php")) ?></p>
            <p>Copyright © 2023 Theodore Stites</p>
            <input type="image" src="../../xhtml11.png" name="validation" alt="https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek1%2FVariables%2Fmenu.php" onclick="window.location='https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek1%2FVariables%2Fmenu.php'">
        </footer>
    </body>
</html>