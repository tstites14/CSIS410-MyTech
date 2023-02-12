<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Our Team</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/ourteam.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <div class='content'>
            <?php include "header.php"; ?>

            <div class='table'>
                <h1>Our Team</h1>
                <table>
                    <colgroup>
                        <col span="1" style="width: 33%;">
                        <col span="1" style="width: 33%;">
                        <col span="1" style="width: 33%;">
                    </colgroup>

                    <!--Executives Header-->
                    <tr>
                        <th></th>
                        <th>Executives</th>
                        <th></th>
                    </tr>
                    <!--Executives Content-->
                    <tr>
                        <td>
                            <div class='tableColumn'>
                                <img src="img/EricPowers.jpg" alt="Eric Powers">
                                <h4>Eric Powers, CEO</h4>
                                <h4>Ph.D. Business Administration and Management</h4>
                                <h4>epowers@mytech.com</h4>
                                <h4>Interests: Golfing</h4>
                            </div>
                        </td>
                        <td>
                            <div class='tableColumn'>
                                <img src="img/FrederickNewman.jpg" alt="Frederick Newman">
                                <h4>Frederick Newman, CIO</h4>
                                <h4>M.S. Information Technology</h4>
                                <h4>fnewman@mytech.com</h4>
                                <h4>Interests: Boating</h4>
                            </div>
                        </td>
                        <td>                            
                            <div class='tableColumn'>
                                <img src="img/MichellePatton.jpg" alt="Michelle Patton">
                                <h4>Michelle Patton, CFO</h4>
                                <h4>M.S. Accounting</h4>
                                <h4>mpatton@mytech.com</h4>
                                <h4>Interests: Movies</h4>
                            </div>
                        </td>
                    </tr>
                    <!--Development Header-->
                    <tr>
                        <th></th>
                        <th>Development</th>
                        <th></th>
                    </tr>
                    <!--Development Content-->
                    <tr>
                        <td>
                            <div class='tableColumn'>
                                <img src="img/HannahDelaney.jpg" alt="Hannah Delaney">
                                <h4>Hannah Delaney, Project Manager</h4>
                                <h4>B.S. Computer Science</h4>
                                <h4>hdelaney@mytech.com</h4>
                                <h4>Interests: Woodworking</h4>
                            </div>
                        </td>
                        <td>
                            <div class='tableColumn'>
                                <img src="img/JamesWilliams.jpg" alt="James Williams">
                                <h4>James Williams, Senior Developer</h4>
                                <h4>B.S. Computer Science</h4>
                                <h4>jwilliams@mytech.com</h4>
                                <h4>Interests: Open-source software</h4>
                            </div>
                        </td>
                        <td>
                            <div class='tableColumn'>
                                <img src="img/NatalieHarvey.jpg" alt="Natalie Harvey">
                                <h4>Natalie Harvey, Developer</h4>
                                <h4>B.S Information Technology</h4>
                                <h4>nharvey@mytech.com</h4>
                                <h4>Interests: Swimming</h4>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class='tableColumn'>
                                <img src="img/JohnEmerson.jpg" alt="John Emerson">
                                <h4>John Emerson, Junior Developer</h4>
                                <h4>B.S Information Technology</h4>
                                <h4>jemerson@mytech.com</h4>
                                <h4>Interests: Hiking</h4>
                            </div>
                        </td>
                        <td></td>
                    </tr>
                </table>
            </div>

            <?php 
                include "../../footer.php";
                footer('', __FILE__);
            ?>
        </div>
    </body>
</html>