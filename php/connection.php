<?php 
class Database
{
    private static $instance = null;
    private $conn;
    private $host = "localhost";
    private $dbname = "event_db";
    private $username = "root";
    private $password = "";

    private function __construct(){
        $this->conn = new mysqli($this->host,$this->username,$this->password,$this->dbname);
    }

    public static function Instance(){
        if(self::$instance == null){
            self::$instance = new Database();
        }
        return self::$instance;
    }
     public function getconnection(){
        return $this->conn;
     }

}
?>