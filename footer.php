<style>
    .footer {
        background-color: gray;
        font-family: Arial, Helvetica, sans-serif;

        /*position: fixed;
        bottom: 0;*/
        width: 99%;
        height: 8em;

        padding-left: 1em;
        padding-top: 0.5em;
    }
    #cert {
        width: 7em;
    }
</style>
<footer class= 'footer'>
    <?php 
        date_default_timezone_set('America/New_York');

        function footer(string $url, string $fileName) {
            echo "<p>This file was last modified on " . date("F d Y, H:i:s.", filemtime($fileName)) . " EST</p>";
            echo '<p>Copyright © 2023 Theodore Stites</p>';
            echo '<input id=\'cert\' type=\'image\' src=\'../../xhtml11.png\' name=\'validation\' alt=\'' . $url . '\' onclick=\'window.location="' . $url  . '"\'>';
            echo '</footer>';
        }
    ?>