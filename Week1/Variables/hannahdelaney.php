<html>
    <head>
        <title>Hannah Delaney</title>
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
                    <img src='img/HannahDelaney.jpg'/>
                    <h5>
                        <?php
                            echo $hannahDelaney->get_name() . ', ' . $hannahDelaney->get_job() . '<br/><br/>';
                            echo $hannahDelaney->get_degree() . '<br/><br/>';
                            echo $hannahDelaney->get_department() . ' Department<br/><br/>';
                            echo  'Interests: ' . $hannahDelaney->get_interests() . '<br/><br/>';
                            echo $hannahDelaney->get_email();
                        ?>
                    </h5>
                    <a href='menu.php'>Back</a></li>
                </div>
        </div>
        <footer class= 'footer'>
            <p><?php echo "This file was last modified on " . date("F d Y, H:i:s.", filemtime("hannahdelaney.php")) ?></p>
            <p>Copyright © 2023 Theodore Stites</p>
        </footer>
    </body>
</html>