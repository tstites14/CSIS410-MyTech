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
                <form action="storeinsert.php" method="post">
                    <?php 
                        if (isset($_GET["title"])) {
                            echo "Title: <input class='input' type='text' name='title'>";
                        } else {
                            echo "Title: <input class='input' type='text' name='title' disabled>";
                        }
                    ?>
                    <br>
                    <fieldset>
                        <legend>Select the product type:</legend>
                        <input type="radio" class="radio" name="android" value="Android">
                        <label for="android">Android</label>
                        <input type="radio" class="radio" name="iOS" value="iOS">
                        <label for="iOS">iOS</label>
                        <input type="radio" class="radio" name="combo" value="combo">
                        <label for="combo">Combo</label>
                        <input type="radio" class="radio" name="merchandise" value="Merchandise">
                        <label for="merchandise">Merchandise</label>
                    </fieldset>
                    <input type="hidden" name="table" value="<?php echo $_POST["submit"]; ?>">
                    <br>
                    <input type="number" class="input" name="price" value="">
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