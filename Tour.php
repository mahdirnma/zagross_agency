<?php
require_once "Model.php";
class Tour extends Model{
    public function search($data)
    {
        return $this->conn->query("SELECT * FROM $this->table WHERE title LIKE '%$data%'");
    }

    function update()
    {
        // TODO: Implement update() method.
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }

    function insert()
    {
        // TODO: Implement insert() method.
    }
}