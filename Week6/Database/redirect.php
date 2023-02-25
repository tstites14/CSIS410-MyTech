<?php 
    include "accounts.php";

    session_start();
    
    $account = "";
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        foreach ($accounts as $curAccount) {
            echo $curAccount->get_username();
            if ($curAccount->get_username() == $_POST["username"] && $curAccount->get_password() == $_POST["password"]) {
                $account = $curAccount;

                $_SESSION["authlevel"] = $account->get_accesslevel();
                break;
            }
        }
    }

    if (isset($_SESSION["authlevel"]) && $_SESSION["authlevel"] > 0) {
        redirectSecure();
    } else {
        redirectLogin();
    }

    function redirectSecure() {
        header('Location: index.php');
    }

    function redirectLogin() {
        echo "<script>
                alert('Incorrect username or password. Please try again!');
                window.location.href='login.php';
              </script>";
        exit;
    }
?>