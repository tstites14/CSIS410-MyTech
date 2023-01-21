<html>
    <head>
        <title>James Williams</title>
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
                    <img src='img/JamesWilliams.jpg'/>
                    <h5>
                        <?php
                            echo $jamesWilliams->get_name() . ', ' . $jamesWilliams->get_job() . '<br/><br/>';
                            echo $jamesWilliams->get_degree() . '<br/><br/>';
                            echo $jamesWilliams->get_department() . ' Department<br/><br/>';
                            echo  'Interests: ' . $jamesWilliams->get_interests() . '<br/><br/>';
                            echo $jamesWilliams->get_email();
                        ?>
                    </h5>
                    <a href='menu.php'>Back</a></li>
                </div>
        </div>
        <footer class= 'footer'>
            <p><?php echo "This file was last modified on " . date("F d Y, H:i:s.", filemtime("jameswilliams.php")) ?></p>
            <p>Copyright © 2023 Theodore Stites</p>
        </footer>
    </body>
</html>