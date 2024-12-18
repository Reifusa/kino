<!doctype html>
<?
session_start();require "src/connect.php";
?>

<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Онлайн-кинотеатр КИНОДОМ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/ui-range-slider.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style1.css">
</head>

<body>

<? require('haf/header.php')?>

    <main>
    <div class="breadcrumb-area-2">
            <div class="container-fluid mt-0 mb-10">
                <div class="row">
                    <div class="col-xxl-12">
                        <nav aria-label="breadcrumb" class="breadcrumb-list-2 pt-0">

                            <div class="block2 lii"><a href="../index.php" class="linktext ml-70">Главная</a><div class="linetext1" style="margin-left: 7px;">></div><div class="linetext1" style="margin-left: 7px;">Подписки</div></div>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-75 mr-85 mt-0 mb-20">
        <div class="h1" style="font-size: 30px;">Подписки</div>
        <div class="top-selling-area top-selling-padding ">
<div class="container mb-0 mt-0">
    <div class="row"> 
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
            <button id="button1" onclick="changeContent(this, 'Лучшие фильмы от Кинодома и не только!', 'Погрузитесь в мир фильмов с нашей эксклюзивной подпиской, где каждый момент становится эпическим кинематографическим приключением.', '4 месяца за 1 ₽, затем — 100 ₽ в месяц.', '#ff0000'); updateNextButton(1);" class="subsq" style="margin-top: 32px;"><div class="subtext" style="font-size: 20px; font-family: 'Istok Web'; text-align: center;">Для киноманов</div></button>
            </div>
        </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                <button onclick="changeContent(this, 'Лучшие сериалы от Кинодома!', 'Погрузитесь в мир сериалов с нашей эксклюзивной подпиской, где каждый момент становится эпическим приключением.', '4 месяца за 1 ₽, затем — 90 ₽ в месяц.', '#ff0000'); updateNextButton(2);" class="subsq" style="margin-top: 32px;"><div class="subtext" style="font-size: 20px; font-family: 'Istok Web'; text-align: center;">Для сериаломанов</div></button>
            </div>
        </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                <button onclick="changeContent(this, 'Лучшие мультфильмы от Кинодома и не только!', 'Погрузитесь в мир мультфильмов с детьми при помощи нашей эксклюзивной подписки, где каждый момент становится эпическим кинематографическим приключением.', '4 месяца за 1 ₽, затем — 80 ₽ в месяц.', '#ff0000'); updateNextButton(3);" class="subsq" style="margin-top: 32px;"><div class="subtext" style="font-size: 20px; font-family: 'Istok Web'; text-align: center;">Для детей</div></button>
            </div>
        </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                <button onclick="changeContent(this, 'Всё самое лучшее от Кинодома и не только!', 'Погрузитесь в обширный мир с нашей эксклюзивной подпиской, где каждый момент становится эпическим кинематографическим приключением.', '4 месяца за 1 ₽, затем — 300 ₽ в месяц.', '#ff0000'); updateNextButton(4);" class="subsq" style="margin-top: 32px;"><div class="subtext" style="font-size: 20px; font-family: 'Istok Web'; text-align: center;">Всё сразу</div></button>
            </div>
        </div>
        </div>
        <script>
            var selectedButton = null;
            function changeContent(button, text, content, content1, color){
                if(selectedButton !=null){
                    selectedButton.classList.remove("selected");
                }
                button.classList.add("selected");
                selectedButton = button;

                document.getElementById("text1").innerHTML = text;
                document.getElementById("content1").innerHTML = content;
                document.getElementById("content2").innerHTML = content1;
                button.style.backroundColor = color;
            }
        </script>
        <div style="display: flex;"></div>
        <div style="justify-content: flex-start;"></div>

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb"> 
                    <div class="subsq2 d-xxl-flex d-none d-xl-flex d-lg-flex">
                    <div style="width: 50%; display: flexbox;">                        
                        <div class="pt-40 pl-20" style="font-size: 25px; font-family: 'Istok Web'; color: #f5f5f5;" id="text1">
                        <!-- Лучшие фильмы от Кинодома и не только! -->
                    </div>
                        <div class="pt-40 pl-20 d-lg-none d-xl-none d-xxl-block" style="font-size: 20px; font-family: 'Istok Web';" id="content1">
                        <!-- Погрузитесь в мир фильмов с нашей эксклюзивной подпиской, где каждый момент становится эпическим кинематографическим приключением. -->
                    </div>
                        <div class="pt-20 pl-20" style="font-size: 20px; font-family: 'Istok Web'; margin-bottom: auto;" id="content2">
                        <!-- 4 месяца за 1 ₽, затем — 100 ₽ в месяц. -->
                    </div>
                        <div class="pl-20" style="padding-bottom:40px; margin-top: 40px;"><a id="nextButton" href=""><div class='rounded-rectangle'><div class="buttontext">Оформить подписку</div></div></a></div>
                    </div>
                    <div style="width: 50%;"><img src="assets/img/sub/Frame33.png" style="width: 100%; aspect-ratio: 2/1;"></div>
                </div>
                <div class="d-md-flex d-none d-xxl-none d-xl-none d-sm-flex"><a id="nextButton1" href=""><div class="rounded-rectangle mt-20"><div class="buttontext">Оформить подписку</div></div></a></div>
            </div>
        </div>
        </div>
        <script>
            function updateNextButton(id){
                var nextButton = document.getElementById("nextButton");
                var nextButton1 = document.getElementById("nextButton1");
                nextButton.href = "cart.php?id="+id;
                nextButton1.href = "cart.php?id="+id;
            }

            window.addEventListener('DOMContentLoaded', function(){
                document.getElementById('button1').click();
            })
        </script>
        <div class="d-flex" style="align-items: center;">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb"> 
                
                    <div class="mt-20" style="font-size: 30px; font-family: 'Istok Web'; color: #f5f5f5;">Содержимое подписок</div>
            </div>
        </div>
        </div>
    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <ul class="header-left p-rel d-flex align-items-center">
                    <li class="static  mr-20" style="font-size: 20px; font-family: 'Istok Web'; color: #f5f5f5; text-align: center; width:25%;">Для киноманов</li>
                    <li class="static  mr-20" style="font-size: 20px; font-family: 'Istok Web'; color: #f5f5f5; text-align: center; width:25%;">Для сериаломанов</li>
                    <li class="static  mr-20" style="font-size: 20px; font-family: 'Istok Web'; color: #f5f5f5; text-align: center; width:25%;">Для детей</li>
                    <li class="static  mr-20" style="font-size: 20px; font-family: 'Istok Web'; color: #f5f5f5; text-align: center; width:25%;">Всё разом</li>
                </ul>
        </div>
        </div>
        <div class="mt-20"></div>
        <div class="d-flex" style="align-items: center;">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
            <div class="single-product wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb"> 
                    <div style="font-size: 20px; font-family: 'Istok Web'; color: #c4c4c4;">Доступ к фильмам</div>
            </div>
        </div>
        </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <ul class="header-left p-rel d-flex">
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                </ul>
        </div>
        </div>
        <div class="mt-20"></div>
        <div class="d-flex" style="align-items: center;">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
            <div class="single-product wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb"> 
                    <div style="font-size: 20px; font-family: 'Istok Web'; color: #c4c4c4;">Доступ к сериалам</div>
            </div>
        </div>
        </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <ul class="header-left p-rel d-flex">
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                </ul>
        </div>
        </div>
        <div class="mt-20"></div>
        <div class="d-flex" style="align-items: center;">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
            <div class="single-product wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb"> 
                    <div style="font-size: 20px; font-family: 'Istok Web'; color: #c4c4c4;">Доступ к сериалам</div>
            </div>
        </div>
        </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <ul class="header-left p-rel d-flex">
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                </ul>
        </div>
        </div>
        <div class="mt-20"></div>
        <div class="d-flex" style="align-items: center;">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
            <div class="single-product wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb"> 
                    <div style="font-size: 20px; font-family: 'Istok Web'; color: #c4c4c4;">Доступ к сериалам</div>
            </div>
        </div>
        </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <ul class="header-left p-rel d-flex">
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                </ul>
        </div>
        </div>
        <div class="mt-20"></div>
        <div class="d-flex" style="align-items: center;">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
            <div class="single-product wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb"> 
                    <div style="font-size: 20px; font-family: 'Istok Web'; color: #c4c4c4;">Доступ к сериалам</div>
            </div>
        </div>
        </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <ul class="header-left p-rel d-flex">
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                </ul>
        </div>
        </div>
        <div class="mt-20"></div>
        <div class="d-flex" style="align-items: center;">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
            <div class="single-product wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb"> 
                    <div style="font-size: 20px; font-family: 'Istok Web'; color: #c4c4c4;">Доступ к сериалам</div>
            </div>
        </div>
        </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <ul class="header-left p-rel d-flex">
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                    <li class="static mr-20" style="text-align: center; width:25%;"><img src="assets/img/icon/plus.png" alt=""></li>
                </ul>
        </div>
        </div>

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">   
                    <div class="mt-40" style="font-size: 30px; font-family: 'Istok Web'; color: #f5f5f5;">Преимущества наших подписок</div>
            </div>
        </div>
        </div>
        <ul style="margin-left: 30px;">
            <li style="list-style: disc; font-size: 20px; font-family: 'Istok Web'; color: #c4c4c4;" class="mb-20">Мы доступны для вас на любом устройстве.</li>
            <li style="list-style: disc; font-size: 20px; font-family: 'Istok Web'; color: #c4c4c4;" class="mb-20">Мы доступны для вас на любом устройстве.</li>
            <li style="list-style: disc; font-size: 20px; font-family: 'Istok Web'; color: #c4c4c4;" class="mb-20">Мы доступны для вас на любом устройстве.</li>
            <li style="list-style: disc; font-size: 20px; font-family: 'Istok Web'; color: #c4c4c4;" class="mb-40">Мы доступны для вас на любом устройстве.</li>
        </ul>

        <!-- <form action="src/addsubtext.php" method="post">
            <input type="text" name="name">
            <input type="text" name="desc">
            <input type="text" name="descsum">
            <input type="text" name="price">
            <button type="submit">ОЛОЛО</button>
        </form> -->

        </div>
        </div>
        <!-- <form action="src/addsub.php" method="post">
            <input type="text" name="sub">
            <button type="submit">Отправить</button>
        </form>
        <form class="formadd" action="src/addsubtext.php" method="post">
            <input type="text" name="name">
            <input type="text" name="desc">
            <input type="text" name="descsum">
            <input type="text" name="price">
            <button type="submit">Отправить</button>
        </form> -->
        <div class="stick"></div>
        </div>


        
    </main>

    <? require('haf/footer.php')?>

<!-- JS here -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/tweenmax.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery-ui-slider-range.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.scrollUp.min.js"></script>
<script src="assets/js/countdown.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/parallex.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>