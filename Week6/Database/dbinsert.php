<?php
    include "dbconnection.php";

    $name = $_GET["name"];
    $title = $_GET["title"];
    $comments = $_GET["comments"];

    $db = new DBConnection();
    $db->insertData("comments", $name, $title, $comments);
    echo "<script>window.location.href='existingcomments.php'</script>"
?>