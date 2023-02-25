<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>New Comments</title>

        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <div class="content">
            <div class='header'>
                <h2>MyTech Co. Ltd.</h2>
                <h3>Employee Login</h3>
            </div>
            <form action="dbinsert.php" method="get">
                Name: <input type="text" name="name" value="">
                <br>
                Title: <input type="text" name="title" value="">
                <br>
                Comments: <textarea id="comments" rows="5" cols="35" name="comments"></textarea>
                <br>
                <button type="submit">Submit</button>
            </form>
        </div>
        <?php 
            include "../../footer.php";
            footer('', __FILE__);
        ?>
    </body>
</html>