<?php
class connection{
    public $dbserver="localhost";
    public $dbname="zagrosstour";
    public $username="root";
    public $password="";

    public function connected()
    {

        $pdo=new PDO("mysql:host=$this->dbserver;dbname=$this->dbname",$this->username,$this->password);
        $pdo->exec("set names utf8mb4");
        return $pdo;
    }


}