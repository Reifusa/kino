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
</head>

<body>

    <!-- header area start -->
    <? require('haf/header.php')?>

    <main>
        <?
    $id = $_GET['id'];
    $queyOne = "SELECT * from `films` where `films`.`id фильма`='$id'";
    $one = mysqli_query($db, $queyOne);
    $one = mysqli_fetch_assoc($one);
    ?>
    <div class="breadcrumb-area-2">
            <div class="container-fluid mt-0 mb-10">
                <div class="row">
                    <div class="col-xxl-12">
                        <nav aria-label="breadcrumb" class="breadcrumb-list-2 pt-0">
                            <div class="block2 lii"><a href="../index.php" class="linktext ml-70">Главная</a><div class="linetext1" style="margin-left: 7px;">></div><a href="films.php" class="linetext1" style="margin-left: 7px;">Изменить информацию о фильме: <?=$one['Название фильма']?></a></div>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    <div class="category-area" id="category-area">
            <div class="ml-80 mr-80">

        <form class="formadd" action="src/redact.php" method="post">
            <input class="ml-20 mt-20" type="text" name="name" value="<?=$one['Название фильма']?>">
            <select name="genre" class="ml-20 mt-20">
                <option value="<?=$one['id жанра']?>">2. Выберите жанр</option>
                <?$querygenre = "SELECT * FROM `genres`";
                           $al = mysqli_query($db,$querygenre);
                           $al = mysqli_fetch_all($al);
                           print_r($al);
                           foreach($al as $va){
                            ?>
                <option value="<?=$va[0]?>"><?=$va[1]?></option>
               <?} ?>
            </select>
            <input class="ml-20 mt-20" type="text" name="descrip" value="<?=$one['Описание']?>">
            <input class="ml-20 mt-20" type="text" name="rating" value="<?=$one['Рейтинг']?>">
            <input class="ml-20 mt-20" type="text" name="restrict" value="<?=$one['Ограничение']?>">
            <input class="ml-20 mt-20" type="text" name="time" value="<?=$one['Длительность']?>">
            <select name="country" class="ml-20 mt-20">
                <option value="<?=$one['id страны']?>">7. Выберите страну</option>
                <?$querycount = "SELECT * FROM `countries`";
                           $all = mysqli_query($db,$querycount);
                           $all = mysqli_fetch_all($all);
                           print_r($all);
                           foreach($all as $val){
                            ?>
                <option value="<?=$val[0]?>"><?=$val[1]?></option>
               <?} ?>
            </select>
            <select name="year" class="ml-20 mt-20">
                <option value="<?=$one['id года']?>">8. Выберите год</option>
                <?$queryyear = "SELECT * FROM `years`";
                           $all = mysqli_query($db,$queryyear);
                           $all = mysqli_fetch_all($all);
                           print_r($all);
                           foreach($all as $val){
                            ?>
                <option value="<?=$val[0]?>"><?=$val[1]?></option>
               <?} ?>
            </select>
            <input class="ml-20 mt-20" type="text" name="poster" value="assets/img/posters/<?=$one['Постер']?>">
            <select name="price" class="ml-20 mt-20">
                <option value="<?=$one['Цена']?>">9. Выберите доступность фильма</option>
                <option value="Бесплатно">Бесплатно</option>
                <option value="Подписка">Подписка</option>
            </select>
            <input type="hidden" name="id" class="ml-20 mt-20" value="<?=$one['id фильма']?>"><br>
            <button type="submit" class="ml-20 mt-20">Редактировать</button>
            <button type="reset" class="ml-20 mt-20 mb-20">Очистить</button>
           </form>

           <form class="formadd mt-20" action="src/delete.php" method="post">
            <input type="hidden" name="id" value="<?=$one['id фильма']?>"><br>
            <button type="submit" class="ml-20 mt-20 mb-20">Удалить</button>
           </form>

        <div class="stick mt-40"></div>
        </div>
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