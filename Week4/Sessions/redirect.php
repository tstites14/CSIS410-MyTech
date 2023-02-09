<?php 
    session_start();
    $auth = "";
    if ((isset($_POST["username"]) && $_POST["username"] == "customer") &&
        (isset($_POST["password"]) && $_POST["password"] == "customer")) {
            $_SESSION["auth"] = true;

            $auth = $_SESSION["auth"];
        }

    if (isset($_SESSION["auth"]) && $_SESSION["auth"]) {
        redirectSecure();
    } else {
        redirectLogin();
    }

    function redirectSecure() {
        header('Location: menu.php');
    }

    function redirectLogin() {
        header('Location: login.php');
        exit;
    }
?>