<?     session_start();
    require "src/connect.php";?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Вход</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/preloader.css">
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/meanmenu.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
   <link rel="stylesheet" href="assets/css/themify-icons.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/ui-range-slider.css">
   <link rel="stylesheet" href="assets/css/main.css">
   <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<? require('haf/header.php')?>        
<main>

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area-2">
            <div class="container-fluid mt-0 mb-10">
                <div class="row">
                    <div class="col-xxl-12">
                        <nav aria-label="breadcrumb" class="breadcrumb-list-2 pt-0">
                            <div class="block2 lii"><a href="../index.php" class="linktext ml-70">Главная</a><div class="linetext1" style="margin-left: 7px;">></div><a href="films.php" class="linetext1" style="margin-left: 7px;">Профиль</a></div>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->
        <div class="ml-75 mt-0 mb-20">
            <div class="evaluatetext1" style="font-size: 25px;">ФИО:</div><div class="footertext mb-20" style="font-size: 15px;"><?=$_SESSION['user']['FIO']?></div>
            <div class="evaluatetext1" style="font-size: 25px;">Почта:</div><div class="footertext mb-20" style="font-size: 15px;"><?=$_SESSION['user']['E-mail']?></div>
            <div class="evaluatetext1" style="font-size: 25px;">Номер телефона:</div><? if(isset($_SESSION['user']['№tel']) and $_SESSION['user']['№tel'] !== 'null'){
                ?><div class="footertext mb-20" style="font-size: 15px;"><?=$_SESSION['user']['№tel']?></div>
            <?} else {?>
                <div class="footertext mb-20" style="font-size: 15px;">Номер телефона не был указан</div>
            <?}?>
            <div class="evaluatetext1" style="font-size: 25px;">Статус подписки:</div>
            <?$id = $_SESSION["user"]['id'];
            $query = "SELECT * FROM `subscription` where `subscription`.`id пользователя` = '$id' and `subscription`.`Состояние подписки` = '1'";
            $sub = mysqli_query($db, $query);
            $sub = mysqli_fetch_assoc($sub);
            if($sub){
                ?><div class="footertext mb-20" style="font-size: 15px;">Подписка активна до <?=$sub['Дата/время окончания подписки']?></div>
            <?}else{?>
                <div class="footertext mb-20" style="font-size: 15px;">Отсутствует подписка</div>
<?}?>   <a href="src/exit.php" class="evaluatetext1" style="font-size: 25px;">Выйти</a>
</div>
        <div class="ml-75 mr-80">
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