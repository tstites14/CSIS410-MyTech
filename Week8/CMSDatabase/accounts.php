<?php
    include "dbconnection.php";

    $db = new DBConnection();

    class Account {
        protected string $username;
        protected string $password;
        protected int $accessLevel;

        function __construct($username, $password, $accessLevel) {
            $this->username = $username;
            $this->password = $password;
            $this->accessLevel = $accessLevel;
        }

        function get_username() {
            return $this->username;
        }

        function get_password() {
            return $this->password;
        }

        function get_accesslevel() {
            return $this->accessLevel;
        }
    }

    $accounts = array();

    $dbAccounts = $db->select("*", "users");
    while ($row = $dbAccounts->fetch_assoc()) {

        $account = new Account($row["username"], $row["password"], $row["accesslevel"]);
        array_push($accounts, $account);
    }
?>