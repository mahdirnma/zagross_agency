<?php session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"]!="true"){
    header("Location: index.php");
}
require_once "Admin.php";
$admin=new Admin("tours");

require_once "layout/header.php";
head("Admin Panel","admin");
?>
<div class="header-border">
    <div class="tours-border">
        <table class="tours">
            <tr class="table-border">
                <td>حذف</td>
                <td>ویرایش</td>
                <td>تصویر</td>
                <td>درجه سختی</td>
                <td>هزینه</td>
                <td>تعداد روز</td>
                <td>روز شروع</td>
                <td>توضیحات</td>
                <td>نام تور</td>
                <td>شماره</td>
            </tr>
            <?php
            foreach ($admin->select() as $tour){
                echo "
                <tr>
                <td><a href='delete_process.php?id={$tour["id"]}'><img src='../images/delete.svg' alt='delete' class='tour-icon'></a></td>
                <td><a href='update.php?id={$tour["id"]}'><img src='../images/update.svg' alt='update' class='tour-icon'></a></td>
                <td><a href='../uploads/{$tour["image"]}' target='_blank'><img src='../uploads/{$tour["image"]}' alt='tour' class='tour-img'></a></td>
                <td>{$tour["hardness_id"]}</td>
                <td>{$tour["price"]}</td>
                <td>{$tour["days"]}</td>
                <td>{$tour["start_day"]}</td>
                <td>{$tour["description"]}</td>
                <td>{$tour["title"]}</td>
                <td>{$tour["id"]}</td>
                ";
            }
            ?>
        </table>
        <a href="logout_process.php">Logout</a>
    </div>
    <div class="dashboard">
        <a href="admin_panel.php">مشاهده تورها</a>
        <a href="insert.php">اضافه کردن تور</a>
    </div>
</div>
</body>
</html>