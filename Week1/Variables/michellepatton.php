<!DOCTYPE html>
<html lang='en-US'>
    <head>
        <title>Michelle Patton</title>
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
                    <img src='img/MichellePatton.jpg' alt="Michelle Patton">
                    <h5>
                        <?php
                            echo $michellePatton->get_name() . ', ' . $michellePatton->get_job() . '<br><br>';
                            echo $michellePatton->get_degree() . '<br><br>';
                            echo $michellePatton->get_department() . ' Department<br><br>';
                            echo  'Interests: ' . $michellePatton->get_interests() . '<br><br>';
                            echo $michellePatton->get_email();
                        ?>
                    </h5>
                    <a href='menu.php'>Back</a>
                </div>
        </div>
        
        <?php 
            include '../../footer.php';
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek1%2FVariables%2Fmichellepatton.php', __FILE__);
        ?>
    </body>
</html>