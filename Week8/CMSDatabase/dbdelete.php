<?php 
    include "dbconnection.php";

    $id = $_GET["itemID"];
    echo $id;
    $table = $_GET["table"];
    echo $table;

    $db = new DBConnection();
    $db->delete($table, "id", $id);

    echo "<script>window.location.href='index.php'</script>";
?>