<!DOCTYPE html>
<html lang='en-US'>
    <head>
        <title>James Williams</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/details.css">
        <?php include 'variables.php'?>
    </head>
    <body class='content'>
        <div class='content'>
                <div class='header'>
                    <h1>MyTech Co. Ltd.</h1>
                </div>
                <div class='body'>
                    <img src='img/JamesWilliams.jpg' alt="James Williams">
                    <h5>
                        <?php
                            echo $jamesWilliams->get_name() . ', ' . $jamesWilliams->get_job() . '<br><br>';
                            echo $jamesWilliams->get_degree() . '<br><br>';
                            echo $jamesWilliams->get_department() . ' Department<br><br>';
                            echo  'Interests: ' . $jamesWilliams->get_interests() . '<br><br>';
                            echo $jamesWilliams->get_email();
                        ?>
                    </h5>
                    <a href='menu.php'>Back</a>
                </div>
        </div>
        <footer class= 'footer'>
            <p><?php echo "This file was last modified on " . date("F d Y, H:i:s.", filemtime("jameswilliams.php")) ?></p>
            <p>Copyright © 2023 Theodore Stites</p>
            <input type="image" src="../../xhtml11.png" name="validation" alt="https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek1%2FVariables%2Fjameswilliams.php" onclick="window.location='https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek1%2FVariables%2Fjameswilliams.php'">
        </footer>
    </body>
</html>