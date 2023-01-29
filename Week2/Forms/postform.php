<!DOCTYPE html>
<html lang='en-US'>
    <head>
        <title>Post Form</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/postform.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">
    </head>
    <body>
        <div class='content'>
            <div class='header'>
                <h1>Week 2: Forms</h1>
                <h2>Liberty University Online CSIS 410: Web Enterprise Technologies</h2>
            </div>
            <div class='formData'>
                <form action="postformresults.php" method="post">
                    <h3>Participant's Name*</h3>
                    <input id='nameTextbox' type="text" name="name" value="" required>

                    <div class='formColumns'>
                        <div class='formDiv'>
                            <img src='https://upload.wikimedia.org/wikipedia/commons/6/64/Android_logo_2019_%28stacked%29.svg' alt="Android development">
                            <h3>Android App</h3>
                            <h3>$5,000 - $8,000 (Depending on complexity)</h3>
                            <h4>Features:</h4>
                            <p>Professional design and coding</p>
                            <p>Permanent support for all finished products</p>
                            <p>Additional feature updates available*</p>
                            <br>


                            <h4>On a scale of 1-5, how fair is the pricing for this product?</h4>
                            <!--For some reason, radio buttons must have the label text set up this way to display the text-->
                            <input class='radio' type="radio" name="aPricing" value="1" required> 1
                            <input class='radio' type="radio" name="aPricing" value="2" required> 2
                            <input class='radio' type="radio" name="aPricing" value="3" required> 3
                            <input class='radio' type="radio" name="aPricing" value="4" required> 4
                            <input class='radio' type="radio" name="aPricing" value="5" required> 5
                            <br>
                            <h4>Would you prefer support to be an optional purchase?</h4>
                            <input class='radio' type="radio" name="aSupport" value="Yes" required> Yes
                            <input class='radio' type="radio" name="aSupport" value="No" required> No
                            <br>
                            <h4>On a scale of 1-5, give your thoughts on a subscription-based support option that lowers the initial cost.</h4>
                            <input class='radio' type="radio" name="aSub" value="1" required> 1
                            <input class='radio' type="radio" name="aSub" value="2" required> 2
                            <input class='radio' type="radio" name="aSub" value="3" required> 3
                            <input class='radio' type="radio" name="aSub" value="4" required> 4
                            <input class='radio' type="radio" name="aSub" value="5" required> 5
                            <br>
                            <h4>On a scale of 1-5, how likely are you to purchase an add-on that releases the source code to you?</h4>
                            <input class='radio' type="radio" name="aSource" value="1" required> 1
                            <input class='radio' type="radio" name="aSource" value="2" required> 2
                            <input class='radio' type="radio" name="aSource" value="3" required> 3
                            <input class='radio' type="radio" name="aSource" value="4" required> 4
                            <input class='radio' type="radio" name="aSource" value="5" required> 5
                            <br>
                            <h4>Which option most closely matches how often do you expect to use our support for your app?</h4>
                            <input class='radio' type="radio" name="aFrequency" value="Once a year" required> Once a year
                            <input class='radio' type="radio" name="aFrequency" value="Every six months" required> Every six months
                            <input class='radio' type="radio" name="aFrequency" value="Every month" required> Every month
                            <input class='radio' type="radio" name="aFrequency" value="Every other week" required> Every other week


                            <br>
                            <br>
                            <br>
                            <p>* Feature updates are available at an additional cost</p>
                        </div>
                        <div class='formDiv'>
                            <img src='https://upload.wikimedia.org/wikipedia/commons/6/63/IOS_wordmark_%282017%29.svg' alt="iOS development">
                            <h3>iOS App</h3>
                            <h3>$5,000 - $8,000 (Depending on complexity)</h3>
                            <h4>Features:</h4>
                            <p>Professional design and coding</p>
                            <p>Permanent support for all finished products</p>
                            <p>Additional updates available*</p>
                            <br>

                            <h4>On a scale of 1-5, how fair is the pricing for this product?</h4>
                            <input class='radio' type="radio" name="iPricing" value="1" required> 1
                            <input class='radio' type="radio" name="iPricing" value="2" required> 2
                            <input class='radio' type="radio" name="iPricing" value="3" required> 3
                            <input class='radio' type="radio" name="iPricing" value="4" required> 4
                            <input class='radio' type="radio" name="iPricing" value="5" required> 5
                            <br>
                            <h4>Would you prefer support to be an optional purchase?</h4>
                            <input class='radio' type="radio" name="iSupport" value="Yes" required> Yes
                            <input class='radio' type="radio" name="iSupport" value="No" required> No
                            <br>
                            <h4>On a scale of 1-5, give your thoughts on a subscription-based support option that lowers the initial cost.</h4>
                            <input class='radio' type="radio" name="iSub" value="1" required> 1
                            <input class='radio' type="radio" name="iSub" value="2" required> 2
                            <input class='radio' type="radio" name="iSub" value="3" required> 3
                            <input class='radio' type="radio" name="iSub" value="4" required> 4
                            <input class='radio' type="radio" name="iSub" value="5" required> 5
                            <br>
                            <h4>On a scale of 1-5, how likely are you to purchase an add-on that releases the source code to you?</h4>
                            <input class='radio' type="radio" name="iSource" value="1" required> 1
                            <input class='radio' type="radio" name="iSource" value="2" required> 2
                            <input class='radio' type="radio" name="iSource" value="3" required> 3
                            <input class='radio' type="radio" name="iSource" value="4" required> 4
                            <input class='radio' type="radio" name="iSource" value="5" required> 5
                            <br>
                            <h4>Which option most closely matches how often do you expect to use our support for your app?</h4>
                            <input class='radio' type="radio" name="iFrequency" value="Once a year" required>Once a year
                            <input class='radio' type="radio" name="iFrequency" value="Every six months" required> Every six months
                            <input class='radio' type="radio" name="iFrequency" value="Every month" required> Every month
                            <input class='radio' type="radio" name="iFrequency" value="Every other week" required> Every other week

                            <br>
                            <br>
                            <br>
                            <p>* Feature updates are available at an additional cost</p>
                        </div>
                        <div class='formDiv'>
                            <img src='https://upload.wikimedia.org/wikipedia/commons/6/64/Android_logo_2019_%28stacked%29.svg' alt="Android development">
                            <img src='https://upload.wikimedia.org/wikipedia/commons/6/63/IOS_wordmark_%282017%29.svg' alt="iOS development">
                            <h3>Combo Package</h3>
                            <h3>$8,000 - $15,000 (Depending on complexity)</h3>
                            <h4>Features:</h4>
                            <p>Professional design and coding</p>
                            <p>Permanent support for all finished products</p>
                            <p>Additional updates available*</p>
                            <br>

                            <h4>On a scale of 1-5, how fair is the pricing for this product?</h4>
                            <input class='radio' type="radio" name="cPricing" value="1" required> 1
                            <input class='radio' type="radio" name="cPricing" value="2" required> 2
                            <input class='radio' type="radio" name="cPricing" value="3" required> 3
                            <input class='radio' type="radio" name="cPricing" value="4" required> 4
                            <input class='radio' type="radio" name="cPricing" value="5" required> 5
                            <br>
                            <h4>Would you prefer a support option for only one of the two apps?</h4>
                            <input class='radio' type="radio" name="cSupport" value="Yes" required> Yes
                            <input class='radio' type="radio" name="cSupport" value="No" required> No
                            <br>
                            <h4>On a scale of 1-5, would you be interested in a higher price that includes feature updates?</h4>
                            <input class='radio' type="radio" name="cUpdates" value="1" required> 1
                            <input class='radio' type="radio" name="cUpdates" value="2" required> 2
                            <input class='radio' type="radio" name="cUpdates" value="3" required> 3
                            <input class='radio' type="radio" name="cUpdates" value="4" required> 4
                            <input class='radio' type="radio" name="cUpdates" value="5" required> 5
                            <br>
                            <h4>How likely are you to purchase the combo compared to only one app?</h4>
                            <input class='radio' type="radio" name="cPurchase" value="Very Unlikely" required> Very Unlikely
                            <input class='radio' type="radio" name="cPurchase" value="Unlikely" required> Unlikely
                            <input class='radio' type="radio" name="cPurchase" value="Neutral" required> Neutral
                            <input class='radio' type="radio" name="cPurchase" value="Likely" required> Likely
                            <input class='radio' type="radio" name="cPurchase" value="Very Likely" required> Very Likely
                            <br>
                            <h4>On a scale of 1-5, how interested would you be in an additional discount for multiple purchases?</h4>
                            <input class='radio' type="radio" name="cDiscount" value="1" required> 1
                            <input class='radio' type="radio" name="cDiscount" value="2" required> 2
                            <input class='radio' type="radio" name="cDiscount" value="3" required> 3
                            <input class='radio' type="radio" name="cDiscount" value="4" required> 4
                            <input class='radio' type="radio" name="cDiscount" value="5" required> 5
                            
                            <br>
                            <br>
                            <br>
                            <p>* Feature updates are available at an additional cost</p>
                        </div>
                    </div>

                    <h4>Add any other comments here:</h4>
                    <textarea id='commentBox' name='comments'></textarea>
                    <br>
                    <input id='submitButton' type="submit" name='Submit' value="Send your feedback">
                </form>
                <br>
                <a href='menu.php'>Back</a>
            </div>
        </div>

        <?php
                include '../../footer.php';
                footer('https://validator.w3.org/nu/?doc=http%3A%2F%2Ftstites.com%2FWeek2%2FForms%2Fpostform.php', __FILE__);
            ?>
    </body>
</html>