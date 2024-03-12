<?php
session_start();
require_once "Admin.php";
$session=$_SESSION["login"];
$userName=$_POST["username"];
$password=$_POST["password"];
$admin=new Admin("admins");
$status=false;
$admin_id="";
foreach ($admin->select() as $user){
    if ($userName==$user["userName"] && $password==$user["password"]){
        $status=true;
        $admin_id=$user["id"];
        break;
    }
}
var_dump($session);
if ($status && $session="true" && isset($session)){
    header("Location: admin_panel.php");
}else if (!$status || $session!="true"){
    header("Location: index.php");
}