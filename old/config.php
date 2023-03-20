<?php

    class Database {
        private $dns = "mysql:host=localhost;dbname=crud_db";
        private $dbuser = "root";
        private $dbpass = "";
        public $conn;

        public function __construct(){
            try {
                $this->conn = new PDO($this->dns,$this->dbuser,$this->dbpass);
                echo 'connected to database';
            }
            catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
        
    }

    $ob = new Database();


?>