<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Update Existing Comments</title>

        <link rel="stylesheet" type="text/css" href="css/updatecomments.css">
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

            <div class="formData">
                <form action="dbupdate.php" method="post">
                    Name: <input class='textbox' type="text" name="name" value="<?php echo $_POST["name"] ?>">
                    <br>
                    Title: <input class='textbox' type="text" name="title" value="<?php echo $_POST["title"] ?>">
                    <br>
                    Comments: <textarea id="comments" rows="5" cols="35" name="comments"><?php echo $_POST["comments"] ?></textarea>
                    <br>
                    <button id="submit" type="submit" name="submit" value="<?php echo $_POST["submit"] ?>">Submit</button>
                </form>
                <a href="existingcomments.php">Back</a>
            </div>
        </div>
        <?php 
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek6%2FDatabase%2Fupdatecomments.php', __FILE__);
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