<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Get Form Results</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/getformresults.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <div class='content'>
            <div class='header'>
                <h1>Week 2: Forms</h1>
                <h2>Liberty University Online CSIS 410: Web Enterprise Technologies</h2>
            </div>
            <div class='reportData'>
                <!--Get data from getform.php-->
                <?php 
                    $aPricing = $_GET["aPricing"];
                    $aSupport = $_GET["aSupport"];
                    $aSub = $_GET["aSub"];
                    $aSource = $_GET["aSource"];
                    $aFrequency = $_GET["aFrequency"];

                    $iPricing = $_GET["iPricing"];
                    $iSupport = $_GET["iSupport"];
                    $iSub = $_GET["iSub"];
                    $iSource = $_GET["iSource"];
                    $iFrequency = $_GET["iFrequency"];
                    
                    $cPricing = $_GET["cPricing"];
                    $cSupport = $_GET["cSupport"];
                    $cUpdates = $_GET["cUpdates"];
                    $cPurchase = $_GET["cPurchase"];
                    $cDiscount = $_GET["cDiscount"];
                ?>

                <h1>Feedback Results</h1>
                    <h3>Android App Results</h3>
                        <h4>For the question "On a scale of 1-5, how fair is the pricing for this product?", you answered:</h4>
                            <p><?php echo $aPricing;?></p>
                        <h4>For the question "Would you prefer support to be an optional purchase?", you answered:</h4>
                            <p><?php echo $aSupport;?></p>
                        <h4>For the question "On a scale of 1-5, give your thoughts on a subscription-based support option that lowers the initial cost.", you answered:</h4>
                            <p><?php echo $aSub;?></p>
                        <h4>For the question "On a scale of 1-5, how likely are you to purchase an add-on that releases the source code to you?", you answered:</h4>
                            <p><?php echo $aSource;?></p>
                        <h4>For the question "Which option most closely matches how often do you expect to use our support for your app?", you answered:</h4>
                            <p><?php echo $aFrequency;?></p>
                    <hr>
                    <h3>iOS App Results</h3>
                        <h4>For the question "On a scale of 1-5, how fair is the pricing for this product?", you answered:</h4>
                            <p><?php echo $iPricing;?></p>
                        <h4>For the question "Would you prefer support to be an optional purchase?", you answered:</h4>
                            <p><?php echo $iSupport;?></p>
                        <h4>For the question "On a scale of 1-5, give your thoughts on a subscription-based support option that lowers the initial cost.", you answered:</h4>
                            <p><?php echo $iSub;?></p>
                        <h4>For the question "On a scale of 1-5, how likely are you to purchase an add-on that releases the source code to you?", you answered:</h4>
                            <p><?php echo $iSource;?></p>
                        <h4>For the question "Which option most closely matches how often do you expect to use our support for your app?", you answered:</h4>
                            <p><?php echo $iFrequency;?></p>
                    <hr>
                    <h3>Combo Package Results</h3>
                        <h4>For the question "On a scale of 1-5, how fair is the pricing for this product?", you answered:</h4>
                                <p><?php echo $cPricing;?></p>
                            <h4>For the question "Would you prefer a support option for only one of the two apps?", you answered:</h4>
                                <p><?php echo $cSupport;?></p>
                            <h4>For the question "On a scale of 1-5, would you be interested in a higher price that includes feature updates?", you answered:</h4>
                                <p><?php echo $cUpdates;?></p>
                            <h4>For the question "How likely are you to purchase the combo compared to only one app?", you answered:</h4>
                                <p><?php echo $cPurchase;?></p>
                            <h4>For the question "On a scale of 1-5, how interested would you be in an additional discount for multiple purchases?", you answered:</h4>
                                <p><?php echo $cDiscount;?></p>
                    
                    <hr>
                    <a href='menu.php'>Back to menu</a>
            </div>
        </div>

        <?php 
            include '../../footer.php';
            footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek2%2FForms%2Fgetformresults.php', __FILE__);
        ?>
    </body>
</html>