<!DOCTYPE html>
<html lang='en-US'>
    <head>
        <title>Hannah Delaney</title>
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
                    <img src='img/HannahDelaney.jpg' alt="Hannah Delaney">
                    <h5>
                        <?php
                            echo $hannahDelaney->get_name() . ', ' . $hannahDelaney->get_job() . '<br><br>';
                            echo $hannahDelaney->get_degree() . '<br><br>';
                            echo $hannahDelaney->get_department() . ' Department<br><br>';
                            echo  'Interests: ' . $hannahDelaney->get_interests() . '<br><br>';
                            echo $hannahDelaney->get_email();
                        ?>
                    </h5>
                    <a href='menu.php'>Back</a>
                </div>
        </div>
        
        <?php 
            include '../../footer.php';
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek1%2FVariables%2Fhannahdelaney.php', __FILE__);
        ?>
    </body>
</html>