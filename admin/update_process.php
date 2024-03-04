<?php
require_once "Admin.php";
$id=$_POST["id"];
$title=$_POST["title"];
$description=$_POST["description"];
$duration=$_POST["duration"];
$start=$_POST["start"];
$price=$_POST["price"];
$hardness=$_POST["hardness"];
$admin=new Admin("tours");
$admin->update(["id"=>$id,
    "title"=>$title,
    "description"=>$description,
    "start"=>$start,
    "duration"=>$duration,
    "price"=>$price,
    "hardness"=>$hardness]);
header("Location: admin_panel");
