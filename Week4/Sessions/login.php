<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Login</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php 
            session_start();
            if(isset($_SESSION["auth"])) {
                header("Location: menu.php");
            }
        ?>

        <div class='content'>
            <div class='header'>
                <h2>MyTech Co. Ltd.</h2>
                <h3>Employee Login</h3>
            </div>
            <div class='formData'>
                <form action="redirect.php" method="post">
                    Username: <input class="textbox" type="text" name="username" value="">
                    <br>
                    Password: <input class="textbox" type="password" name="password" value="">
                    <br>
                    <input class="button" type="submit" name="submit" value="Submit">
                </form>
                <a href='../../index.php'>Back</a>
            </div>


            <?php 
                include "../../footer.php";
                footer('https://validator.w3.org/nu/?doc=https%3A%2F%2Ftstites.com%2FWeek4%2FSessions%2Flogin.php', __FILE__);
            ?> 
        </div>
    </body>
</html>