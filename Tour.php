<?php
require_once "Model.php";
class Tour extends Model{
    public function search($data)
    {
        return $this->conn->query("SELECT * FROM $this->table WHERE title LIKE '%$data%'");
    }

    function update($data)
    {
        // TODO: Implement update() method.
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
    }

    function insert($data)
    {
        // TODO: Implement insert() method.
    }
}