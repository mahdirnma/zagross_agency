<?php session_start();
if (isset($_SESSION["login"]) && $_SESSION["login"]=="true"){
    header("Location: admin_panel.php");
}
if (isset($_COOKIE["remember"])){
    require_once "Admin.php";
    $admin=new Admin("admins");
    $user=($admin->loginWithId($_COOKIE["remember"]))->fetch();
    if ($user){
        $_SESSION["login"]="true";
        header("Location: admin_panel.php");
    }

}
require_once "layout/header.php";
head("Zagross Admins","login");

?>
<div class="header">
    <h1>LOGIN</h1>
    <form action="login_process.php" method="post">
        <label for="username">UserName</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <label for="remember">remember</label>
        <input type="checkbox" name="remember" id="remember" value="remember">
        <input type="submit" value="Go">
    </form>
</div>
</body>
</html>