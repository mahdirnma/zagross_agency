<?php session_start();
session_destroy();
setcookie("remember",null,time()-1);
header("Location: index.php");