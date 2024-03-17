<?php
require_once "../Model.php";
class Admin extends Model {

    function update($data)
    {
        $this->conn->query("UPDATE `tours` SET `title`='{$data["title"]}',`description`='{$data["description"]}',`start_day`='{$data["start"]}',`days`='{$data["duration"]}',`price`='{$data["price"]}',`hardness_id`='{$data["hardness"]}',`image`='{$data["image"]}' WHERE id={$data["id"]}");
    }

    function delete($id)
    {
        $this->conn->exec("DELETE FROM `tours` WHERE id=".$id);
    }

    function insert($data){
        $this->conn->exec("INSERT INTO `tours`(`title`, `description`, `start_day`, `days`, `price`, `hardness_id`, `image`) VALUES ('{$data["title"]}','{$data["description"]}','{$data["start"]}','{$data["duration"]}','{$data["price"]}','{$data["hardness"]}','{$data["image"]}')");
    }

    public function select_special($id){
        return $this->conn->query("SELECT * FROM $this->table WHERE id=".$id);
    }
    public function login($username,$password)
    {
        $password=md5($password);
        return $this->conn->query("SELECT * FROM $this->table WHERE username='$username' AND password='$password'");
    }
    public function loginWithId($id)
    {
        return $this->conn->query("SELECT * FROM $this->table WHERE id='$id'");
    }
}