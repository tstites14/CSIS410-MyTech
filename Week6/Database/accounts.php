<?php 
    class Account {
        protected string $username;
        protected string $password;
        protected int $accessLevel;

        function __construct($username, $password) {
            $this->username = $username;
            $this->password = $password;
            
            switch (strtolower($username)) {
                case "customer":
                    $this->accessLevel = 1;
                    break;
                case "publisher":
                    $this->accessLevel = 2;
                    break;
                case "admin":
                    $this->accessLevel = 3;
                    break;
            }
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

    $customer = new Account("customer", "customer");
    $publisher = new Account("publisher", "publisher");
    $admin = new Account("admin", "admin");

    $accounts = [$customer, $publisher, $admin];
?>