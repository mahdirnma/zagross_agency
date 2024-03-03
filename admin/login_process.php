<?php
require_once "Admin.php";
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
if ($status){
    header("Location: admin_panel.php?id=".$admin_id);
}else{
    header("Location: index.php");
}