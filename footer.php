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