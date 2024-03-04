<?php
require_once "Admin.php";
$title=$_POST["title"];
$description=$_POST["description"];
$duration=$_POST["duration"];
$start=$_POST["start"];
$price=$_POST["price"];
$hardness=$_POST["hardness"];
$admin=new Admin("tours");
$admin->insert(["title"=>$title,
    "description"=>$description,
    "start"=>$start,
    "duration"=>$duration,
    "price"=>$price,
    "hardness"=>$hardness]);