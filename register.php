<!doctype html>
<html class="no-js" lang="zxx">
<?
session_start();require "src/connect.php";
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Регистрация</title>
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
                            <div class="block2 lii"><a href="../index.php" class="linktext ml-70">Главная</a><div class="linetext1" style="margin-left: 7px;">></div><a href="films.php" class="linetext1" style="margin-left: 7px;">Зарегестрироваться</a></div>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- login area start -->
        <section class="login-area pt-100 pb-100">
            <div class="container">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <div class="basic-login">
                              <h3 class="text-center mb-60">Регистрация</h3>
                              <form method="post" action="src/reg.php">
                                 <label for="name">Логин <span>**</span></label>
                                <input id="name" type="text" name="login" placeholder="Введите логин..." required/>
                                 <label for="email">Почта <span>**</span></label>
                                 <input id="email" type="text" name="email" placeholder="Введите почту..." required/>
                                 <label for="tel">Номер телефона</label>
                                 <input id="tel" type="tel" name="tel" placeholder="Введите номер телефона... (необязательно)" />
                                 <label for="pass">Пароль <span>**</span></label>
                                 <input id="pass" type="password" name="pass" placeholder="Введите пароль..." required/>
                                 <label for="passtoo">Подтверждение пароля <span>**</span></label>
                                 <input id="passtoo" type="password" name="passtoo" placeholder="Введите подтверждение пароля..." required/>
                                 <div class="mt-10"></div>
                                 <button class="s-btn s-btn-4 w-100" type="submit">Зарегистрироваться</button>
                                 <div class="or-divide"><span>или</span></div>
                                 <a href="login.php" class="s-btn s-btn-2 w-100">Войти</a>
                              </form>
                        </div>
                     </div>
                  </div>
            </div>
         </section>
        <!-- login area end -->

        <div class="ml-80 mr-80">
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