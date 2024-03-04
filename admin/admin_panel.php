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
    <div class="tours-border">
        <table class="tours">
            <tr class="table-border">
                <td>حذف</td>
                <td>ویرایش</td>
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
                <td><a href='delete_process.php?id={$tour["id"]}'><img src='../images/delete.svg' alt='delete'></a></td>
                <td><a href='admin_panel.php?id={$tour["id"]}'><img src='../images/update.svg' alt='update'></a></td>
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
    </div>
    <div class="dashboard">
        <a href="admin_panel.php">مشاهده تورها</a>
        <a href="insert.php">اضافه کردن تور</a>
    </div>
</div>
</body>
</html>