<?php session_start();
$check=false;
if (isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"])){
    $check=true;
}
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
if ($status && $check){
    //generate session
    $_SESSION["login"]="true";
    header("Location: admin_panel.php");
}else{
    header("Location: index.php");
}