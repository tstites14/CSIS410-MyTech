<?php 
    include "accounts.php";
    include_once "dbconnection.php";

    session_start();
    
    $account = new Account("", "", 0);
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        foreach ($accounts as $curAccount) {
            if ($curAccount->get_username() == $_POST["username"] && $curAccount->get_password() == $_POST["password"]) {
                $account = $curAccount;

                $_SESSION["authlevel"] = $account->get_accesslevel();
                break;
            }
        }
    }

    if (isset($_SESSION["authlevel"]) && $_SESSION["authlevel"] > 0) {
        $db = new DBConnection();
        $db->insert("loginhistory", array($account->get_accesslevel()), "id, loginlevel");

        redirectSecure();
    } else {
        redirectLogin();
    }

    function redirectSecure() {
        header('Location: storeproducts.php');
    }

    function redirectLogin() {
        echo "<script>
                alert('Incorrect username or password. Please try again!');
                window.location.href='login.php';
              </script>";
        exit;
    }
?>