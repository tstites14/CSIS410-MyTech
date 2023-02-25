<?php
    class DBConnection {
        private $config;
        private mysqli $connection;

        function __construct() {
            //Storing sensitive db information outside of webroot prevents easy collection of my real web server login
            $this->config = parse_ini_file("../../../dbconnection.ini", true)["csis410"];
        }

        private function getDBConnection() {
            $host = $this->config["host"];
            $username = $this->config["username"];
            $password = $this->config["password"];
            $db = $this->config["db"];
            
            return new mysqli($host, $username, $password, $db);
        }

        private function queryDB(string $query) {
            //Open connection to database
            $this->connection = $this->getDBConnection();

            if (!mysqli_connect_error()) {
                $result = $this->connection->query($query);

                //After operation completes, close connection
                $this->connection->close();
    
                return $result;
            } else {
                $this->connection->close();
                return "Error: " . strval(mysqli_connect_errno());
            }

        }

        function selectData(string $select, string $from, string $where = "", string $whereCondition = "", string $order = "", string $orderType = "DESC") {
            if (!empty($where) && !empty($whereCondition) && !empty($order) && !empty($orderType))
                $result = $this->queryDB("SELECT $select FROM $from WHERE $where = $whereCondition ORDER BY $order $orderType");
            else if (!empty($where) && !empty($whereCondition) && empty($order) && empty($orderType))
                $result = $this->queryDB("SELECT $select FROM $from WHERE $where = $whereCondition");
            else
                $result = $this->queryDB("SELECT $select FROM $from");

            return $result;
        }

        function deleteData(string $select, string $from, string $where, string $whereCondition) {
            return $this->queryDB("DELETE $select FROM $from WHERE $where = $whereCondition");
        }

        function insertData(string $into, $name, $title, $comments) {
            return $this->queryDB("INSERT INTO $into VALUES (0, '$name', '$title', '$comments', NOW())");
        }
    }
?>