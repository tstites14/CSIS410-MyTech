<?php
    include "dbconnection.php";

    $db = new DBConnection();

    echo $db->updateData("comments", "commentdate", $_POST["submit"], $_POST);
    echo "<script>window.location.href='existingcomments.php';</script>"
?>