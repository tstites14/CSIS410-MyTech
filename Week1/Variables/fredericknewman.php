<!DOCTYPE html>
<html lang='en-US'>
    <head>
        <title>Frederick Newman</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/details.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
        <?php include 'variables.php'?>
    </head>
    <body class='content'>
        <div class='content'>
                <div class='header'>
                    <h1>MyTech Co. Ltd.</h1>
                </div>
                <div class='body'>
                    <img src='img/FrederickNewman.jpg' alt="Frederick Newman">
                    <h5>
                        <?php
                            echo $frederickNewman->get_name() . ', ' . $frederickNewman->get_job() . '<br><br>';
                            echo $frederickNewman->get_degree() . '<br><br>';
                            echo $frederickNewman->get_department() . ' Department<br><br>';
                            echo  'Interests: ' . $frederickNewman->get_interests() . '<br><br>';
                            echo $frederickNewman->get_email();
                        ?>
                    </h5>
                    <a href='menu.php'>Back</a>
                </div>
        </div>
        
        <?php 
            include '../../footer.php';
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek1%2FVariables%2Ffredericknewman.php', __FILE__);
        ?>
    </body>
</html>