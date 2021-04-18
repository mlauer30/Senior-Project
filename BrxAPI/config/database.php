<?php 
    class Database {
        private $host = "test-api-matthew.cxjqgdayfmry.us-east-1.rds.amazonaws.com";
        private $database_name = "brx";
        private $username = "root";
        private $password = "0vjL8me19K8I";

        public $conn;

        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }  
?>