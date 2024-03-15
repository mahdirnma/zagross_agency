<?php session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"]!="true"){
    header("Location: index.php");
}
require_once "Admin.php";
$id=$_GET["id"];
$admin=new Admin("tours");
$admin->delete($id);
header("Location: admin_panel");