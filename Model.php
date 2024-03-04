<?php
require_once "connection.php";
abstract class Model extends connection{
    public $table;
    public $conn;
    public function __construct($table)
    {
        $this->table=$table;
        $this->conn=$this->connected();
    }

    public function select()
    {
        return $this->conn->query("SELECT * FROM $this->table");
    }
    abstract function update();
    abstract function delete();
    abstract function insert();

}