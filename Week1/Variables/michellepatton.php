<html>
    <head>
        <title>Michelle Patton</title>
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
                    <img src='img/MichellePatton.jpg'/>
                    <h5>
                        <?php
                            echo $michellePatton->get_name() . ', ' . $michellePatton->get_job() . '<br/><br/>';
                            echo $michellePatton->get_degree() . '<br/><br/>';
                            echo $michellePatton->get_department() . ' Department<br/><br/>';
                            echo  'Interests: ' . $michellePatton->get_interests() . '<br/><br/>';
                            echo $michellePatton->get_email();
                        ?>
                    </h5>
                    <a href='menu.php'>Back</a></li>
                </div>
        </div>
        <footer class= 'footer'>
            <p><?php echo "This file was last modified on " . date("F d Y, H:i:s.", filemtime("michellepatton.php")) ?></p>
            <p>Copyright © 2023 Theodore Stites</p>
        </footer>
    </body>
</html>