<?php
require_once "../Model.php";
class Admin extends Model {

    function update()
    {
        // TODO: Implement update() method.
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }

    function insert($data){
        $this->conn->exec("INSERT INTO `tours`(`title`, `description`, `start_day`, `days`, `price`, `hardness_id`) VALUES ('{$data["title"]}','{$data["description"]}','{$data["start"]}','{$data["duration"]}','{$data["price"]}','{$data["hardness"]}')");
    }
}