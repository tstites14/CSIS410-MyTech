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

        function select(string $select, string $from, string $where = NULL, string $whereCondition = NULL, string $order = NULL, string $orderType = "DESC") {
            if (isset($where) && isset($whereCondition) && !isset($order)) {
                $result = $this->queryDB("SELECT $select FROM $from WHERE $where = '$whereCondition'");
            }
            else if (isset($where) && isset($whereCondition) && isset($order)) {
                $result = $this->queryDB("SELECT $select FROM $from WHERE $where = '$whereCondition' ORDER BY $order $orderType");
            }
            else {
                $result = $this->queryDB("SELECT $select FROM $from");
            }

            return $result;
        }

        function update(string $from, string $where, string $whereCondition, array $fieldNames, array $newData) {
            $updateData = "";
            $length = count($newData);
            for ($i = 0; $i < $length; $i++) {
                $updateData = $updateData . $fieldNames[$i] . " = " . "'$newData[$i]'" . ", ";
                echo "|" . $updateData . "|";
            }
            $updateData = substr($updateData, 0, -2);

            return $this->queryDB("UPDATE $from SET $updateData WHERE $where = $whereCondition");
        }

        function delete(string $from, string $where, string $whereCondition) {
            return $this->queryDB("DELETE FROM $from WHERE $where = $whereCondition");
        }

        function insert(string $into, $contents) {
            $insertData = "";
            foreach ($contents as $item) {
                $insertData = $insertData . $item . "', '";
            }
            unset($item);
            $insertData = substr($insertData, 0, -4);

            return $this->queryDB("INSERT INTO $into VALUES (0, '$insertData')");
        }
    }
?>