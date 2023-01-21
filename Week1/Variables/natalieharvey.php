<html>
    <head>
        <title>Natale Harvey</title>
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
                    <img src='img/NatalieHarvey.jpg'/>
                    <h5>
                        <?php
                            echo $natalieHarvey->get_name() . ', ' . $natalieHarvey->get_job() . '<br/><br/>';
                            echo $natalieHarvey->get_degree() . '<br/><br/>';
                            echo $natalieHarvey->get_department() . ' Department<br/><br/>';
                            echo  'Interests: ' . $natalieHarvey->get_interests() . '<br/><br/>';
                            echo $natalieHarvey->get_email();
                        ?>
                    </h5>
                    <a href='menu.php'>Back</a></li>
                </div>
        </div>
        <footer class= 'footer'>
            <p><?php echo "This file was last modified on " . date("F d Y, H:i:s.", filemtime("natalieharvey.php")) ?></p>
            <p>Copyright © 2023 Theodore Stites</p>
        </footer>
    </body>
</html>