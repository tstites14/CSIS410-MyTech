<!DOCTYPE html>
<html lang='en-US'>
    <head>
        <title>Main Menu</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body class='content'>
        <div class='content'>
            <div class='header'>
                <h1>Main Menu:</h1>
                <h2>Liberty University Online CSIS 410: Web Enterprise Technologies</h2>
            </div>
            <div class = 'menuList'>
                <ul>
                    <li><a href="Week1/Foundations/menu.php">Module 1, Week 1: Foundations</a></li>
                    <li><a href="Week1/Variables/menu.php">Module 1, Week 1: Variables</a></li>
                    <li><a>Module 2, Week 2: Forms</a></li>
                    <li><a>Module 3, Week 3: Arrays</a></li>
                    <li><a>Module 4, Week 4: Sessions</a></li>
                    <li><a>Module 5, Week 5: CMS Sessions</a></li>
                    <li><a>Module 6, Week 6: Database</a></li>
                    <li><a>Module 8, Week 8: CMS Database</a></li>
                </ul>
            </div>
        </div>
        <footer class= 'footer'>
            <p><?php echo "This file was last modified on " . date("F d Y, H:i:s.", filemtime("index.php")) ?></p>
            <p>Copyright © 2023 Theodore Stites</p>
            <input type="image" src="xhtml11.png" name="validation" alt="https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2F" onclick="window.location='https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2F'">
        </footer>
    </body>
</html>