<?php
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
        <input type="submit" value="Go">
    </form>
</div>
</body>
</html>