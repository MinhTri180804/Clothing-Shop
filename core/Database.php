<?php
    class Database {
        private $host = "localhost";
        private $username = 'root';
        private $password = '';
        private $db = 'clothingshop';
    // create function insert
        public function connectDatabase() {
            $conn = new mysqli($this->host, $this->username, $this->password, $this->db);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            return $conn;
        }
        
        public function queryDatabase($sql) {
            $conn = $this->connectDatabase();
            $result = $conn->query($sql);
            $conn->close();
            return $result;
        }
    }
?>