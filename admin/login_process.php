<?php session_start();
$check=true;
if (!isset($_POST["username"]) || !isset($_POST["password"])  || empty($_POST["username"]) || empty($_POST["password"])){
    header("Location: index.php");
}
require_once "Admin.php";
$userName=$_POST["username"];
$password=$_POST["password"];
$admin=new Admin("admins");
$status=false;
$user=($admin->login($userName,$password))->fetch();
if (!$user){
    header("Location: index.php");

}else{
    $_SESSION["login"]="true";
    if (isset($_POST["remember"]) && $_POST["remember"]="remember"){
        setcookie("remember",$user["id"],time()+60*60*24*31);
    }
    header("Location: admin_panel.php");

}
