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
                $imageurl = "";
                switch ($_POST["itemtype"]) {
                    case "Android":
                        $imageurl = "https://upload.wikimedia.org/wikipedia/commons/6/64/Android_logo_2019_%28stacked%29.svg";
                        break;
                    case "iOS":
                        $imageurl = "https://upload.wikimedia.org/wikipedia/commons/6/63/IOS_wordmark_%282017%29.svg";
                        break;
                    case "Combo":
                        $imageurl = "https://upload.wikimedia.org/wikipedia/commons/6/64/Android_logo_2019_%28stacked%29.svg,https://upload.wikimedia.org/wikipedia/commons/6/63/IOS_wordmark_%282017%29.svg";
                        break;
                    case "Merchandise":
                        $imageurl = "img/tshirt.png";
                        break;
                }

                $contents = array($imageurl, $_POST["title"], $_POST["price"], $_POST["itemtype"]);

                $db->insert($_POST["table"], $contents);
                echo "<script>window.location.href='storeproducts.php'</script>";
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
                        <input type="radio" class="radio" name="itemtype" value="Android">
                        <label for="android">Android</label>
                        <input type="radio" class="radio" name="itemtype" value="iOS">
                        <label for="iOS">iOS</label>
                        <input type="radio" class="radio" name="itemtype" value="combo">
                        <label for="combo">Combo</label>
                        <input type="radio" class="radio" name="itemtype" value="Merchandise">
                        <label for="merchandise">Merchandise</label>
                    </fieldset>
                    <input type="hidden" name="table" value="<?php echo $_GET["table"]; ?>">
                    <br>
                    Price: <input type="number" class="input" name="price" value="" required>
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