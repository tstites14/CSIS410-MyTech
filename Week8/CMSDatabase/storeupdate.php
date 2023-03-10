<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Update Data</title>
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

                if (isset($_POST["updated"])) { {
                    $db->update($_POST["table"], "id", $_POST["id"], array("title", "price", "itemtype"), array($_POST["title"], $_POST["price"], $_POST["itemtype"]));
                }
    
                echo "<script>window.location.href='storeproducts.php'</script>";
                }
            ?>

            <div class='text'>
                <h1>Modify Existing Data</h1>

                <form action="storeupdate.php" method="post">
                    <?php 
                        if (isset($_GET["title"])) {
                            echo "Title: <input class='input' type='text' name='title' value='" . $_GET["title"] . "' required>";
                        } else {
                            echo "Title: <input class='input' type='text' name='title' disabled>";
                        }
                    ?>
                    <br>
                    <fieldset>
                        <legend>Select the product type:</legend>
                        <?php 
                            //Android
                            if (isset($_GET["checked"]) && $_GET["checked"] == "Android")
                                echo "<input type='radio' class='radio' name='itemtype' value='Android' checked='checked'>";
                            else
                                echo "<input type='radio' class='radio' name='itemtype' value='Android'>";
                            echo "<label for='android'>Android</label>";

                            //iOS
                            if (isset($_GET["checked"]) && $_GET["checked"] == "iOS")
                            echo "<input type='radio' class='radio' name='itemtype' value='iOS' checked='checked'>";
                            else
                                echo "<input type='radio' class='radio' name='itemtype' value='iOS'>";
                            echo "<label for='iOS'>iOS</label>";

                            //Combo
                            if (isset($_GET["checked"]) && $_GET["checked"] == "Combo")
                            echo "<input type='radio' class='radio' name='itemtype' value='Combo' checked='checked'>";
                            else
                                echo "<input type='radio' class='radio' name='itemtype' value='Combo'>";
                            echo "<label for='combo'>Combo</label>";

                            //Merchandise
                            if (isset($_GET["checked"]) && $_GET["checked"] == "Merchandise")
                            echo "<input type='radio' class='radio' name='itemtype' value='Merchandise' checked='checked'>";
                            else
                                echo "<input type='radio' class='radio' name='itemtype' value='Merchandise'>";
                            echo "<label for='merchandise'>Merchandise</label>";
                        ?>
                    </fieldset>
                    <br>
                    Price: <input type="number" class="input" name="price" value="<?php echo $_GET["price"] ?>">
                    <br>
                    <input type="hidden" name="id" value="<?php echo $_GET["itemID"]; ?>">
                    <input type="hidden" name="table" value="<?php echo $_GET["table"]; ?>">
                    <button type="submit" name="updated" value="submit">Submit</button>
                </form>
                <form action="storeproducts.php" method="post">
                    <button type="submit" name="submit" value="submit">Back</button>
                </form>
            </div>

            <?php 
                include "../../footer.php";
                footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek5%2FCMSSessions%2Faboutus.php', __FILE__);
            ?>
        </div>
    </body>
</html>