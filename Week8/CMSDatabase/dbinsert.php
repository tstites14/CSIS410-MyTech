<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Add New Data</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/dbinsert.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <div class='content'>
        <?php 
            include "header.php"; 
            include "dbconnection.php";

            $db = new DBConnection();

            if (isset($_POST["inserted"])) {
                //Data has been entered
                if (isset($_POST["title"]) && $_POST["title"] != NULL) {
                    $contents = array($_POST["title"], $_POST["text"]);
                } else {
                    $contents = array($_POST["text"]);
                }


                $db->insert($_POST["table"], $contents);
                echo "<script>window.location.href='index.php'</script>";
            }
        ?>

            <div class='text'>
                <h1>Add New Data</h1>
                <form action="dbinsert.php" method="post">
                    <?php 
                        if (isset($_GET["title"])) {
                            echo "Title: <input class='input' type='text' name='title'>";
                        } else {
                            echo "Title: <input class='input' type='text' name='title' disabled>";
                        }
                    ?>
                    <br>
                    Content: <textarea class='input' type="text" name="text" rows="8" cols="64"><?php echo $_GET["content"] ?></textarea>
                    <input type="hidden" name="table" value="<?php echo $_POST["submit"]; ?>">
                    <br>
                    <button type="submit" name="inserted" value="submit">Submit</button>
                </form>
                <form action="index.php" method="post">
                    <button type="submit" name="submit" value="submit">Home</button>
                </form>
            </div>

            <?php 
                include "../../footer.php";
                footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Faboutus.php', __FILE__);
            ?>
        </div>
    </body>
</html>