<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>New Comments</title>

        <link rel="stylesheet" type="text/css" href="css/newcomment.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <?php 
            session_start();
            if (isset($_SESSION["authlevel"]) && $_SESSION["authlevel"] > 0) { 
        ?>
        <div class="content">
            <div class='header'>
                <h1>MyTech Co. Ltd.</h1>
                <h2>Comment System</h2>
            </div>
            <div class='formData'>
                <form action="dbinsert.php" method="get">
                    Name: <input class='textbox' type="text" name="name" value="">
                    <br>
                    Title: <input class='textbox' type="text" name="title" value="">
                    <br>
                    <label for="comments">Comments:</label>
                    <textarea id="comments" rows="5" cols="35" name="comments" style="resize: none;"></textarea>
                    <br>
                    <button id="submit" type="submit">Submit</button>
                </form>
                <a href="index.php">Back</a>
            </div>

        </div>
        <?php 
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek6%2FDatabase%2Fnewcomment.php', __FILE__);
        ?>
        <?php
            } else {
                echo "<script>";
                echo "alert('You are not authorized to view this content.');";
                echo 'window.location.href="login.php";';
                echo "</script>";
            }
        ?>
    </body>
</html>