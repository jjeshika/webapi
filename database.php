<?php 
require_once 'config.php';

class DatabaseConnect {
    $dbtype = 'MariaDB';
    $dbhost = 'localhost';
    $dbname = 'api';
    $dbusername = 'root';
    $dbpass = '';
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EM v  ULATE_PREPARES => false,
    ]
        protected $con;
        public function openConnection() {
            try{
                $this ->con = new PDO ([$this->dbtype,$this->dbhost,$this-> user, $this-> dbpass])
            }
        }
}


?>