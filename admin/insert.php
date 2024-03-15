<?php session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"]!="true"){
    header("Location: index.php");
}

require_once "layout/header.php";
head("insert tour Panel","admin");
?>
<div class="header-border">
    <form method="post" action="insert_process.php" class="add-tour-border" enctype="multipart/form-data">
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

        <label for="fileToUpload">تصویر تور</label>
        <input type="file" id="fileToUpload" name="fileToUpload" placeholder="تصویر تور" dir="rtl">
        <input type="submit" value="اضافه کردن">
    </form>
    <div class="dashboard">
        <a href="admin_panel.php">مشاهده تورها</a>
    </div>
</div>
</body>
</html>