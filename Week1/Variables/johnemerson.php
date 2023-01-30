<!DOCTYPE html>
<html lang='en-US'>
    <head>
        <title>John Emerson</title>
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
                    <img src='img/JohnEmerson.jpg' alt="John Emerson">
                    <h5>
                        <?php
                            echo $johnEmerson->get_name() . ', ' . $johnEmerson->get_job() . '<br><br>';
                            echo $johnEmerson->get_degree() . '<br><br>';
                            echo $johnEmerson->get_department() . ' Department<br><br>';
                            echo  'Interests: ' . $johnEmerson->get_interests() . '<br><br>';
                            echo $johnEmerson->get_email();
                        ?>
                    </h5>
                    <a href='menu.php'>Back</a>
                </div>
        </div>
        
        <?php 
            include '../../footer.php';
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek1%2FVariables%2Fjohnemerson.php', __FILE__);
        ?>
    </body>
</html>