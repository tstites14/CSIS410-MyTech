<footer class= 'footer'>
    <?php 
        date_default_timezone_set('America/New_York');

        function footer(string $url, string $fileName) {
            echo '<div class="footerContent">';
            logout();
            echo "<p>This file was last modified on " . date("F d Y, H:i:s.", filemtime($fileName)) . " EST</p>";
            echo '<p>Copyright © 2023 Theodore Stites</p>';
            echo '<p>All images of Android and iOS logos are provided by Wikimedia Commons</p>';
            echo '<input id=\'cert\' type=\'image\' src=\'../../xhtml11.png\' name=\'validation\' alt=\'' . $url . '\' onclick=\'window.location="' . $url  . '"\'>';
            echo '</div>';
            echo '</footer>';
        }

        function logout() {
            if (isset($_SESSION["auth"]) && $_SESSION["auth"]) {
                echo '<a id="logout" href="logout.php" onclick="return confirm(\'Are you sure you wish to log out?\');">Log out</a>';
            } else if (isset($_SESSION["authlevel"]) && $_SESSION["authlevel"] > 0) {
                echo '<a id="logout" href="logout.php" onclick="return confirm(\'Are you sure you wish to log out?\');">Log out</a>';
            }
        }
    ?>