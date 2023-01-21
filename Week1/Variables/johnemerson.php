<html>
    <head>
        <title>John Emerson</title>
        <meta charset="utf-8"/>

        <link rel="stylesheet" type="text/css" href="css/details.css" />
        <?php include 'variables.php'?>
    </head>
    <body class='content'>
        <div class='content'>
                <div class='header'>
                    <h1>MyTech Co. Ltd.</h1>
                </div>
                <div class='body'>
                    <img src='img/JohnEmerson.jpg'/>
                    <h5>
                        <?php
                            echo $johnEmerson->get_name() . ', ' . $johnEmerson->get_job() . '<br/><br/>';
                            echo $johnEmerson->get_degree() . '<br/><br/>';
                            echo $johnEmerson->get_department() . ' Department<br/><br/>';
                            echo  'Interests: ' . $johnEmerson->get_interests() . '<br/><br/>';
                            echo $johnEmerson->get_email();
                        ?>
                    </h5>
                    <a href='menu.php'>Back</a></li>
                </div>
        </div>
        <footer class= 'footer'>
            <p><?php echo "This file was last modified on " . date("F d Y, H:i:s.", filemtime("johnemerson.php")) ?></p>
            <p>Copyright © 2023 Theodore Stites</p>
        </footer>
    </body>
</html>