<?php
    include "dbconnection.php";

    $db = new DBConnection();

    $db->deleteData("comments", "commentdate", $_POST["submit"]);
    echo "<script>window.location.href='existingcomments.php';</script>"
?>