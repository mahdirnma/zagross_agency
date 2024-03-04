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
    <form method="post" action="insert_process.php" class="add-tour-border">
        <label for="title">نام تور</label>
        <input type="text" id="title" name="title" placeholder="نام تور" dir="rtl">
        <label for="description">توضیحات تور</label>
        <input type="text" id="description" name="description" placeholder="توضیحات تور" dir="rtl">
        <label for="start">روز شروع تور</label>
        <input type="text" id="start" name="start" placeholder="روز شروع تور" dir="rtl">
        <label for="duration">مدت تور</label>
        <input type="text" id="duration" name="duration" placeholder="مدت تور" dir="rtl">
        <label for="price">هزینه تور</label>
        <input type="number" id="price" name="price" placeholder="هزینه تور" dir="rtl">
        <label for="hardness">درجه سختی تور</label>
        <input type="number" id="hardness" name="hardness" placeholder="درجه سختی تور" dir="rtl">
        <input type="submit" value="اضافه کردن">
    </form>
    <div class="dashboard">
        <a href="admin_panel.php">مشاهده تورها</a>
    </div>
</div>
</body>
</html>