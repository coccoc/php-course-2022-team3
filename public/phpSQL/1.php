<?php 
    interface db{
        public function connectDB();
        // public function insertDB();
        // public function updateDB();
        // public function deleteDB();
    }
    class connect_DB implements db{
        private $user = 'root';
        private $pass = 'dev@123';
        private $serverName = 'localhost';
        private $dbName = 'php_course';
        public function connectDB(){
            try{
                $conn = new PDO("mysql:host='".$this->serverName."';dbname='".$this->dbName."'", $this->user, $this->pass);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                echo "ket noi thanh cong";
            }catch(PDOException $e){
                echo 'ket noi that bai<br>'.$e->getMessage();
            }
        }
    }
    $ketnoi=new connect_DB();
    $ketnoi->connectDB();