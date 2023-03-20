<?php

    class Database {
        private $dns = "mysql:host=localhost;dbname=crud_oop";
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

        public function insert($fullname,$gender,$age)
        {
            $sql = "INSERT INTO users_tbl (fullname,gender,age) VALUES 
            (:fullname,:gender,:age)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':fullname'=>$fullname,':gender'=>$gender,':age'=>$age]);
            return true;
        }
        
        public function read()
        {
            $sql = "SELECT * FROM users_tbl";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                $data[] = $row;
            }
            return $data;
        }

        public function getUserById($id)
        {
            $sql = "SELECT * FROM users_tbl WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id'=>$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        public function update($id,$fullname,$gender,$age)
        {
            $sql = "UPDATE users_tbl SET fullname = :fullname, gender = :gender, age = :age WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':fullname'=>$fullname,'gender'=>$gender,'age'=>$age,'id'=>$id]);
            return true;
        }

        public function delete($id)
        {
            $sql = "DELETE FROM users_tbl WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['id'=>$id]);
            return true;
        }
        
        public function totalRowCount()
        {
            $sql = "SELECT * FROM users_tbl";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $t_rows = $stmt->rowCount();
            return $t_rows;
        }
    }

    $obj = new Database;
    print_r($obj->totalRowCount());
?>