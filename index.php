<?php
require_once "Tour.php";
$tour=new Tour("tours");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zagross tour</title>
    <link rel="stylesheet" href="Webfonts/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
</head>
<body>
<div class="navigation-bar">
    <a href="index.php" id="logo"><img src="images/Logo.svg" alt="zagross tour"></a>
    <nav>
        <ul>
            <li><a href="">صفحه اصلی</a></li>
            <li><a href="">درباره ما</a></li>
            <li><a href="">تورها</a></li>
            <li><a href="">سوالات متداول</a></li>
        </ul>
    </nav>
    <div class="user-border">
        <div class="user">
            <a href="">ورود</a>
            <a href="">ثبت نام</a>
        </div>
    </div>
</div>
<div class="header-border">
    <div class="slider-border">
        <div class="inner-slider"><img src="images/background2.jpg" alt=""></div>
        <div class="inner-slider"><img src="images/background2.jpg" alt=""></div>
        <div class="inner-slider"><img src="images/background2.jpg" alt=""></div>
    </div>
    <div class="header-items">
        <h1>زاگرس تور</h1>
        <h2>مجری برگزاری تورهای داخلی</h2>
        <form method="get" action="index2.php" class="search-box">
            <label for="search">جستجو</label>
            <div>
                <div class="inner-search-box">
                    <input type="search" alt="search" name="search" id="search" placeholder="عنوان تور مورد نظر را وارد کنید ...">
                </div>
                <div class="submit-box">
                    <input type="submit" value=" " name="search-go">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="why-zagros-border">
    <p>چرا زاگرس تور</p>
    <div class="between"></div>
    <div class="header-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
</div>
<div class="last-tour-border">
    <p>جدیدترین تورها</p>
    <div class="between"></div>
    <div class="last-tour">
        <?php
        foreach ($tour->select() as $row){
           echo "<div class='inner-last-tour'>
                 <p>{$row["start_day"]}</p>
                 <img src='uploads/{$row["image"]}' alt='tour'>
                 <div>
                 <p>{$row["days"]} روز</p>
                 <p> سختی {$row["days"]}/5</p>
</div>
<div>
<p>{$row["title"]}</p>
<p>{$row["price"]} تومان</p>
</div>
            <a href='index.php'>مشاهده | سفارش</a>
            </div>
";
        }
        ?>
    </div>
    <a href="" class="see-last-tour">مشاهده همه تور ها</a>
</div>
<script type="text/javascript" src="slick/jquery.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slider-border').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            dotsClass:"slick-dots slider-dots",
            nextArrow:'<button type="button" class="next-button"><img src="images/arrow-right.svg" alt="next" id="right"></button>',
            prevArrow:'<button type="button" class="prev-button"><img src="images/arrow-left.svg" alt="preview" id="left"></button>'
        });
    });
</script>
</body>
</html>