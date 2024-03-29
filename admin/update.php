<?php session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"]!="true"){
    header("Location: index.php");
}

require_once "Admin.php";
$id=$_GET["id"];
$admin=new Admin("tours");
$selected_tour=$admin->select_special($id);
$tour=[];
foreach ($selected_tour as $row){
    $tour["title"]=$row["title"];
    $tour["description"]=$row["description"];
    $tour["start"]=$row["start_day"];
    $tour["duration"]=$row["days"];
    $tour["price"]=$row["price"];
    $tour["hardness"]=$row["hardness_id"];
}

require_once "layout/header.php";
head("update tour Panel","admin");
?>

<div class="header-border">
    <form method="post" action="update_process.php" class="add-tour-border" enctype="multipart/form-data">
        <label for="title">نام تور</label>
        <input type="text" id="title" name="title" placeholder="نام تور" value="<?=$tour["title"]?>" dir="rtl">
        <label for="description">توضیحات تور</label>
        <input type="text" id="description" name="description" placeholder="توضیحات تور" value="<?=$tour["description"]?>" dir="rtl">
        <label for="start">روز شروع تور</label>
        <input type="text" id="start" name="start" placeholder="روز شروع تور" value="<?=$tour["start"]?>" dir="rtl">
        <label for="duration">مدت تور</label>
        <input type="text" id="duration" name="duration" placeholder="مدت تور" value="<?=$tour["duration"]?>" dir="rtl">
        <label for="price">هزینه تور</label>
        <input type="number" id="price" name="price" placeholder="هزینه تور" value="<?=$tour["price"]?>" dir="rtl">
        <label for="hardness">درجه سختی تور</label>
        <input type="number" id="hardness" name="hardness" placeholder="درجه سختی تور" value="<?=$tour["hardness"]?>" dir="rtl">
        <label for="fileToUpload">تصویر تور</label>
        <input type="file" id="fileToUpload" name="fileToUpload" placeholder="تصویر تور" dir="rtl">
        <input type="hidden" id="id" name="id" value="<?=$id?>">
        <input type="submit" value="آپدیت تور">
    </form>
    <div class="dashboard">
        <a href="admin_panel.php">مشاهده تورها</a>
        <a href="insert.php">اضافه کردن تور</a>
    </div>
</div>
</body>
</html>