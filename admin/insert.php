<?php
require_once "Admin.php";
$admin=new Admin("tours");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<div class="header-border">
    <form method="post" action="" class="add-tour-border">
        <label for="title">نام تور</label>
        <input type="text" id="title" name="title" placeholder="نام تور" dir="rtl">
        <label for="description">توضیحات تور</label>
        <input type="text" id="description" name="description" placeholder="توضیحات تور" dir="rtl">
        <label for="start">روز شروع تور</label>
        <input type="text" id="start" name="start" placeholder="روز شروع تور" dir="rtl">
        <label for="start">مدت تور</label>
        <input type="text" id="start" name="start" placeholder="مدت تور" dir="rtl">
    </form>
    <div class="dashboard">
        <a href="admin_panel.php">مشاهده تورها</a>
        <a href="admin_panel.php">اضافه کردن تور</a>
    </div>
</div>
</body>
</html>