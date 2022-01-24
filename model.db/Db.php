<?php
class Db{
    private $host = 'localhost';
    private $db = 'Arena';
    private $user = 'root';
    private $pass = '';

    public function __construct(){

    }

    public function getConnection(){
        try {
            $pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->db, $this->user,$this->pass);
            return $pdo;
        } catch(PDOException $e){
            echo $e.getMessage();
        }
        
    }
}