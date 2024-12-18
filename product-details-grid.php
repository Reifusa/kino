<? require "src/connect.php";

session_start();
$name = $_GET['name'];
// Формирование запроса к базе данных
$sql = "SELECT * FROM `films` WHERE `name_film` LIKE '%$name%' OR `desc_film` LIKE '%$name%'";
$result = mysqli_query($db, $sql);
// Отображение результатов поиска
$row = mysqli_fetch_assoc($result);
 $id = $row['id_film'];
if($id === null){
    header("Location: /index.php");}?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Фильм <?=$row['name_film']?></title>
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
        <?$ig = $row['id_genre_film'];
            $query = "SELECT * FROM `genres` where `genres`.`id_genre` = '$ig'";
            $genre = mysqli_query($db,$query);
            $genre = mysqli_fetch_assoc($genre);?>
        <?$iy = $row['id_year_film'];
            $query = "SELECT * FROM `years` where `years`.`id_year` = '$iy'";
            $year = mysqli_query($db,$query);
            $year = mysqli_fetch_assoc($year);?>
        <?$iс = $row['id_state_film'];
            $query = "SELECT * FROM `states` where `states`.`id_state` = '$iс'";
            $country = mysqli_query($db,$query);
            $country = mysqli_fetch_assoc($country);?>

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area-2">
            <div class="container-fluid mt-0 mb-10">
                <div class="row">
                    <div class="col-xxl-12">
                        <nav aria-label="breadcrumb" class="breadcrumb-list-2 pt-0">
                            <div class="block2 lii"><a href="../index.php" class="linktext ml-70">Главная</a><div class="linetext1" style="margin-left: 7px;">></div><a href="films.php" class="linktext" style="margin-left: 7px;">Фильмы</a><div class="linetext1" style="margin-left: 7px;">></div><a href="films.php?genre=боевики" class="linktext" style="margin-left: 7px;"><?=$genre['name_genre']?></a><div class="linetext1" style="margin-left: 7px;">> <?=$row['name_film']?></div></div>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- product details area start -->
        <div class="h1 ml-75 mt-0 mb-20"><?=$row['name_film']?> (<?=$year['year']?>)</div>
        <div class="">
            <div class="header-main header-main-1 header-padding pl-80 pr-80">
        <div class="container-fluid mt-0 mb-0">
            <div class="row align-items-center">
                <div class="col-xxl-9 col-xl-10 col-lg-10 col-md-11 col-sm-11 col-10 pl-5 pr-5">
                    <div class="header-left p-rel d-flex align-items-center">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="static">
                                        <div class="textforfilm1">Название:<div class="textforfilm2"><?=$row['name_film']?></div></div>
                                </li>
                                    <li class="static">
                                        <div class="textforfilm1">Год выхода:<div class="textforfilm2"><?=$year['year']?></div></div>
                                </li>
                                    <li class="static">
                                        <div class="textforfilm1">Длительность:<div class="textforfilm2"><?=$row['Длительность']?></div></div>
                                    </li>
                                    <?
                                    $ir = $row['id_restrict_film'];
                                    $queryrestr = "SELECT * FROM `restricts` where `restricts`.`id_restr` = $ir";
            $restr = mysqli_query($db, $queryrestr);
            $restr = mysqli_fetch_assoc($restr);?>
                                    <li>
                                        <div class="textforfilm1">Возрастное ограничение:<div class="textforfilm2"><?=$restr['restr']?>+</div></div>
                                    </li>
                                    <li>
                                        <div class="textforfilm1">Теги:<div class="textforfilm2"><?=$country['state']?>, <?=$genre['name_genre']?></div></div>
                                    </li>
                                    <li><div class="textforfilm1">Рейтинг:<div class="lineartextforfilm"><?=$row['rating_film']?></div></div></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="textforfilm3 mt-40  mr-80"><?=$row['desc_film']?></div>


        <div align="center">
            <div class="forvd">
            <video src="/assets/video/<?=$row['name_film']?>.mp4" class="video" id="video-player" controls>
                <!-- <button class="play-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150" fill="none">
                  <circle cx="75" cy="75" r="75" fill="url(#paint0_linear_322_24)" fill-opacity="0.5"/>
                  <path d="M55 51.4721C55 48.4986 58.1293 46.5646 60.7889 47.8944L107.845 71.4223C110.793 72.8964 110.793 77.1036 107.845 78.5777L60.7889 102.106C58.1293 103.435 55 101.501 55 98.5279V51.4721Z" fill="#C4C4C4" fill-opacity="0.8"/>
                  <defs>
                    <linearGradient id="paint0_linear_322_24" x1="2.50367e-06" y1="37.4993" x2="150.28" y2="37.8745" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#7871AA"/>
                      <stop offset="1" stop-color="#F15025"/>
                    </linearGradient>
                  </defs>
                </svg>
              </button> -->
            </video>
        </div>
          </div>
<!--       
          <script>
      const playButton = document.querySelector('.play-button');
      const videoPlayer = document.getElementById('video-player');
      
      playButton.addEventListener('click', () => {
        if (videoPlayer.paused) {
          videoPlayer.play();
        } else {
          videoPlayer.pause();
        }
      });
      
      videoPlayer.addEventListener('play', () => {
        playButton.style.visibility = 'hidden';
      });
      
      videoPlayer.addEventListener('pause', () => {
        playButton.style.visibility = 'visible';
      });
          </script> -->
          <div class="ml-75 mr-85">
          <div class="block2">
                  <div class="col-xxl-5 col-xl-7 col-lg-8 col-md-10 col-sm-12 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">

    <div class="evaluate" style="width: 100%; padding-right: 0px; margin-left: 0px;">
      <div class="evaluatetext1">Оцените фильм</div>
      <div class="evaluatetext2">Оценки улучшают рекомендации</div>
      <div style="display: flex;">
        <a href="stub.php" style="display: flex;"><svg class="star" style="width: 36px" xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none"><path d="M12.926 25.1203C13.2705 24.8788 13.7295 24.8788 14.074 25.1203L20.4144 29.5652C21.1535 30.0834 22.1466 29.4344 21.9688 28.5495L20.1881 19.6833C20.1224 19.3563 20.2241 19.018 20.4592 18.7814L26.5157 12.6873C27.1098 12.0894 26.7432 11.0698 25.9044 10.9872L18.2003 10.228C17.8178 10.1903 17.4907 9.93668 17.3589 9.57559L14.4394 1.5745C14.1197 0.69821 12.8803 0.698211 12.5606 1.5745L9.64105 9.57559C9.50929 9.93668 9.18223 10.1903 8.79971 10.228L1.09557 10.9872C0.256782 11.0698 -0.109796 12.0894 0.484336 12.6873L6.54078 18.7814C6.7759 19.018 6.87758 19.3563 6.81191 19.6833L5.03118 28.5495C4.85344 29.4344 5.84653 30.0834 6.58564 29.5652L12.926 25.1203Z" fill="#C4C4C4"/>
        </svg><div class="startext" style="margin-top: 12px; margin-left: 12.5px;">1</div></a>
        <a href="stub.php" style="display: flex;"><svg class="star" style="width: 36px" xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none"><path d="M12.926 25.1203C13.2705 24.8788 13.7295 24.8788 14.074 25.1203L20.4144 29.5652C21.1535 30.0834 22.1466 29.4344 21.9688 28.5495L20.1881 19.6833C20.1224 19.3563 20.2241 19.018 20.4592 18.7814L26.5157 12.6873C27.1098 12.0894 26.7432 11.0698 25.9044 10.9872L18.2003 10.228C17.8178 10.1903 17.4907 9.93668 17.3589 9.57559L14.4394 1.5745C14.1197 0.69821 12.8803 0.698211 12.5606 1.5745L9.64105 9.57559C9.50929 9.93668 9.18223 10.1903 8.79971 10.228L1.09557 10.9872C0.256782 11.0698 -0.109796 12.0894 0.484336 12.6873L6.54078 18.7814C6.7759 19.018 6.87758 19.3563 6.81191 19.6833L5.03118 28.5495C4.85344 29.4344 5.84653 30.0834 6.58564 29.5652L12.926 25.1203Z" fill="#C4C4C4"/>
        </svg><div class="startext" style="margin-top: 12px; margin-left: 12.5px;">2</div></a>
        <a href="stub.php" style="display: flex;"><svg class="star" style="width: 36px" xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none"><path d="M12.926 25.1203C13.2705 24.8788 13.7295 24.8788 14.074 25.1203L20.4144 29.5652C21.1535 30.0834 22.1466 29.4344 21.9688 28.5495L20.1881 19.6833C20.1224 19.3563 20.2241 19.018 20.4592 18.7814L26.5157 12.6873C27.1098 12.0894 26.7432 11.0698 25.9044 10.9872L18.2003 10.228C17.8178 10.1903 17.4907 9.93668 17.3589 9.57559L14.4394 1.5745C14.1197 0.69821 12.8803 0.698211 12.5606 1.5745L9.64105 9.57559C9.50929 9.93668 9.18223 10.1903 8.79971 10.228L1.09557 10.9872C0.256782 11.0698 -0.109796 12.0894 0.484336 12.6873L6.54078 18.7814C6.7759 19.018 6.87758 19.3563 6.81191 19.6833L5.03118 28.5495C4.85344 29.4344 5.84653 30.0834 6.58564 29.5652L12.926 25.1203Z" fill="#C4C4C4"/>
        </svg><div class="startext" style="margin-top: 12px; margin-left: 12.5px;">3</div></a>
        <a href="stub.php" style="display: flex;"><svg class="star" style="width: 36px" xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none"><path d="M12.926 25.1203C13.2705 24.8788 13.7295 24.8788 14.074 25.1203L20.4144 29.5652C21.1535 30.0834 22.1466 29.4344 21.9688 28.5495L20.1881 19.6833C20.1224 19.3563 20.2241 19.018 20.4592 18.7814L26.5157 12.6873C27.1098 12.0894 26.7432 11.0698 25.9044 10.9872L18.2003 10.228C17.8178 10.1903 17.4907 9.93668 17.3589 9.57559L14.4394 1.5745C14.1197 0.69821 12.8803 0.698211 12.5606 1.5745L9.64105 9.57559C9.50929 9.93668 9.18223 10.1903 8.79971 10.228L1.09557 10.9872C0.256782 11.0698 -0.109796 12.0894 0.484336 12.6873L6.54078 18.7814C6.7759 19.018 6.87758 19.3563 6.81191 19.6833L5.03118 28.5495C4.85344 29.4344 5.84653 30.0834 6.58564 29.5652L12.926 25.1203Z" fill="#C4C4C4"/>
        </svg><div class="startext" style="margin-top: 12px; margin-left: 12.5px;">4</div></a>
        <a href="stub.php" style="display: flex;"><svg class="star" style="width: 36px" xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none"><path d="M12.926 25.1203C13.2705 24.8788 13.7295 24.8788 14.074 25.1203L20.4144 29.5652C21.1535 30.0834 22.1466 29.4344 21.9688 28.5495L20.1881 19.6833C20.1224 19.3563 20.2241 19.018 20.4592 18.7814L26.5157 12.6873C27.1098 12.0894 26.7432 11.0698 25.9044 10.9872L18.2003 10.228C17.8178 10.1903 17.4907 9.93668 17.3589 9.57559L14.4394 1.5745C14.1197 0.69821 12.8803 0.698211 12.5606 1.5745L9.64105 9.57559C9.50929 9.93668 9.18223 10.1903 8.79971 10.228L1.09557 10.9872C0.256782 11.0698 -0.109796 12.0894 0.484336 12.6873L6.54078 18.7814C6.7759 19.018 6.87758 19.3563 6.81191 19.6833L5.03118 28.5495C4.85344 29.4344 5.84653 30.0834 6.58564 29.5652L12.926 25.1203Z" fill="#C4C4C4"/>
        </svg><div class="startext" style="margin-top: 12px; margin-left: 12.5px;">5</div></a>
        <a href="stub.php" style="display: flex;"><svg class="star" style="width: 36px" xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none"><path d="M12.926 25.1203C13.2705 24.8788 13.7295 24.8788 14.074 25.1203L20.4144 29.5652C21.1535 30.0834 22.1466 29.4344 21.9688 28.5495L20.1881 19.6833C20.1224 19.3563 20.2241 19.018 20.4592 18.7814L26.5157 12.6873C27.1098 12.0894 26.7432 11.0698 25.9044 10.9872L18.2003 10.228C17.8178 10.1903 17.4907 9.93668 17.3589 9.57559L14.4394 1.5745C14.1197 0.69821 12.8803 0.698211 12.5606 1.5745L9.64105 9.57559C9.50929 9.93668 9.18223 10.1903 8.79971 10.228L1.09557 10.9872C0.256782 11.0698 -0.109796 12.0894 0.484336 12.6873L6.54078 18.7814C6.7759 19.018 6.87758 19.3563 6.81191 19.6833L5.03118 28.5495C4.85344 29.4344 5.84653 30.0834 6.58564 29.5652L12.926 25.1203Z" fill="#C4C4C4"/>
        </svg><div class="startext" style="margin-top: 12px; margin-left: 12.5px;">6</div></a>
        <a href="stub.php" style="display: flex;"><svg class="star" style="width: 36px" xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none"><path d="M12.926 25.1203C13.2705 24.8788 13.7295 24.8788 14.074 25.1203L20.4144 29.5652C21.1535 30.0834 22.1466 29.4344 21.9688 28.5495L20.1881 19.6833C20.1224 19.3563 20.2241 19.018 20.4592 18.7814L26.5157 12.6873C27.1098 12.0894 26.7432 11.0698 25.9044 10.9872L18.2003 10.228C17.8178 10.1903 17.4907 9.93668 17.3589 9.57559L14.4394 1.5745C14.1197 0.69821 12.8803 0.698211 12.5606 1.5745L9.64105 9.57559C9.50929 9.93668 9.18223 10.1903 8.79971 10.228L1.09557 10.9872C0.256782 11.0698 -0.109796 12.0894 0.484336 12.6873L6.54078 18.7814C6.7759 19.018 6.87758 19.3563 6.81191 19.6833L5.03118 28.5495C4.85344 29.4344 5.84653 30.0834 6.58564 29.5652L12.926 25.1203Z" fill="#C4C4C4"/>
        </svg><div class="startext" style="margin-top: 12px; margin-left: 12.5px;">7</div></a>
        <a href="stub.php" style="display: flex;"><svg class="star" style="width: 36px" xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none"><path d="M12.926 25.1203C13.2705 24.8788 13.7295 24.8788 14.074 25.1203L20.4144 29.5652C21.1535 30.0834 22.1466 29.4344 21.9688 28.5495L20.1881 19.6833C20.1224 19.3563 20.2241 19.018 20.4592 18.7814L26.5157 12.6873C27.1098 12.0894 26.7432 11.0698 25.9044 10.9872L18.2003 10.228C17.8178 10.1903 17.4907 9.93668 17.3589 9.57559L14.4394 1.5745C14.1197 0.69821 12.8803 0.698211 12.5606 1.5745L9.64105 9.57559C9.50929 9.93668 9.18223 10.1903 8.79971 10.228L1.09557 10.9872C0.256782 11.0698 -0.109796 12.0894 0.484336 12.6873L6.54078 18.7814C6.7759 19.018 6.87758 19.3563 6.81191 19.6833L5.03118 28.5495C4.85344 29.4344 5.84653 30.0834 6.58564 29.5652L12.926 25.1203Z" fill="#C4C4C4"/>
        </svg><div class="startext" style="margin-top: 12px; margin-left: 12.5px;">8</div></a>
        <a href="stub.php" style="display: flex;"><svg class="star" style="width: 36px" xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none"><path d="M12.926 25.1203C13.2705 24.8788 13.7295 24.8788 14.074 25.1203L20.4144 29.5652C21.1535 30.0834 22.1466 29.4344 21.9688 28.5495L20.1881 19.6833C20.1224 19.3563 20.2241 19.018 20.4592 18.7814L26.5157 12.6873C27.1098 12.0894 26.7432 11.0698 25.9044 10.9872L18.2003 10.228C17.8178 10.1903 17.4907 9.93668 17.3589 9.57559L14.4394 1.5745C14.1197 0.69821 12.8803 0.698211 12.5606 1.5745L9.64105 9.57559C9.50929 9.93668 9.18223 10.1903 8.79971 10.228L1.09557 10.9872C0.256782 11.0698 -0.109796 12.0894 0.484336 12.6873L6.54078 18.7814C6.7759 19.018 6.87758 19.3563 6.81191 19.6833L5.03118 28.5495C4.85344 29.4344 5.84653 30.0834 6.58564 29.5652L12.926 25.1203Z" fill="#C4C4C4"/>
        </svg><div class="startext" style="margin-top: 12px; margin-left: 12.5px;">9</div></a>
        <a href="stub.php" style="display: flex;"><svg class="star" style="width: 36px" xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none"><path d="M12.926 25.1203C13.2705 24.8788 13.7295 24.8788 14.074 25.1203L20.4144 29.5652C21.1535 30.0834 22.1466 29.4344 21.9688 28.5495L20.1881 19.6833C20.1224 19.3563 20.2241 19.018 20.4592 18.7814L26.5157 12.6873C27.1098 12.0894 26.7432 11.0698 25.9044 10.9872L18.2003 10.228C17.8178 10.1903 17.4907 9.93668 17.3589 9.57559L14.4394 1.5745C14.1197 0.69821 12.8803 0.698211 12.5606 1.5745L9.64105 9.57559C9.50929 9.93668 9.18223 10.1903 8.79971 10.228L1.09557 10.9872C0.256782 11.0698 -0.109796 12.0894 0.484336 12.6873L6.54078 18.7814C6.7759 19.018 6.87758 19.3563 6.81191 19.6833L5.03118 28.5495C4.85344 29.4344 5.84653 30.0834 6.58564 29.5652L12.926 25.1203Z" fill="#C4C4C4"/>
        </svg><div class="startext" style="margin-left: 7px; margin-top: 12px;" >10</div></a>
      </div>
      </div>
      </div>
      </div>
      </div>
      <div class="col-xxl-7 col-xl-5 col-lg-4 col-md-2 col-sm-6 pl-10 pr-10">
      <div class="row">
        <div style="display: flex;">
      <div class="evaluatetext1">Отзывы</div>
      <div style="margin-left:auto;"><a href="addotsiv.php"><div class="ostavotz"><div class="ostavotztext">Оставить отзыв</div></div></a></div>
      </div>
      <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-5 col-sm-6 pl-10 pr-10">
            <div class="single-product wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
      <div class="otziv" style="align-self: flex-end; margin-left: 0px;">
        <div class="name">Ярослав</div>
        <div class="otzivtext">Фильм понравился, смотрели не отрывая глаз!</div>
        <div class="dateandlike">
          <div class="date">15 декабря 2023</div>
          <a href="stub.php"><div class="like"></div></a>
          <div class="number">5</div>
          <div style="margin-left: 5px;"><a href="stub.php"><div class="dislike"></div></a></div>
          <div class="number">1</div>
        </div>
      </div>
      </div>
      </div></div>

      </div>
      </div>

      </div>
      <!-- <div class="otziv" style="align-self: flex-end;">
        <div class="name">Олег</div>
        <div class="otzivtext">Ничего особенного в этом фильме я не увидел...</div>
        <div class="dateandlike">
          <div class="date">13 декабря 2023</div>
          <a href="stub.php"><div class="like"></div></a>
          <div class="number">3</div>
          <div style="margin-left: 5px;"><a href="stub.php"><div class="dislike"></div></a></div>
          <div class="number">10</div>
        </div></div>
      <div class="otziv" style="align-self: flex-end;">
        <div class="name">Екатерина</div>
        <div class="otzivtext">Лучший фильм, обожаю актёра, который играет гл...</div>
        <div class="dateandlike">
          <div class="date">10 декабря 2023</div>
          <a href="stub.php"><div class="like"></div></a>
          <div class="number">7</div>
          <div style="margin-left: 5px;"><a href="stub.php"><div class="dislike"></div></a></div>
          <div class="number">2</div>
        </div></div>
      <div class="otziv" style="align-self: flex-end; margin-right: 85px;">
        <div class="name">Дмитрий</div>
        <div class="otzivtext">Фильм проходной, если любите динамичные бои...</div>
        <div class="dateandlike">
          <div class="date">7 декабря 2023</div>
          <a href="stub.php"><div class="like"></div></a>
          <div class="number">2</div>
          <div style="margin-left: 5px;"><a href="stub.php"><div class="dislike"></div></a></div>
          <div class="number">1</div>
        </div></div> -->
  </div>

  <div class="category-area" id="category-area">
    <div class="ml-80 mr-80 mt-40">
            <div class="col-xxl-12 col-xl-12 col-md-12 col-12 pl-0">
                <div class="single-category p-rel wow fadeInUp" data-wow-delay=".1s">
                    <a href="shop.php">
                        <div class="cat-thumb fix">
                            <div class="genretext mt-0">С фильмом <?=$row['Название фильма']?> смотрят</div>
                        </div>
                    </a>
                </div>
            </div>
  <div class="top-selling-area top-selling-padding ">
    <div class="container mt-20 mb-0">
        <div class="row">
            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="product-details-grid.php"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                        <div class="cart-btn p-abs" style="display: flex;">
                            <a href="#" class="pt-40" style="align-items: flex-start;">
                                <div class="textoc">8.6</div>
                            </a>
                        </div>
                        <div class="product-action product-action-1 p-abs">
                            <a href="#" class="icon-box icon-box-1">
                                <i class="fal fa-heart"></i>
                                <i class="fal fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-10 pb-20 product-content">
                        <a href="product-details-grid.php"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="pages/stub.php"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                        <div class="cart-btn p-abs" style="display: flex;">
                            <a href="#" class="pt-40" style="align-items: flex-start;">
                                <div class="textoc">8.6</div>
                            </a>
                        </div>
                        <div class="product-action product-action-1 p-abs">
                            <a href="#" class="icon-box icon-box-1">
                                <i class="fal fa-heart"></i>
                                <i class="fal fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-10 pb-20 product-content">
                        <a href="pages/stub.php"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="pages/stub.php"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                        <div class="cart-btn p-abs" style="display: flex;">
                            <a href="#" class="pt-40" style="align-items: flex-start;">
                                <div class="textoc">8.6</div>
                            </a>
                        </div>
                        <div class="product-action product-action-1 p-abs">
                            <a href="#" class="icon-box icon-box-1">
                                <i class="fal fa-heart"></i>
                                <i class="fal fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-10 pb-20 product-content">
                        <a href="pages/stub.php"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="pages/stub.php"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                        <div class="cart-btn p-abs" style="display: flex;">
                            <a href="#" class="pt-40" style="align-items: flex-start;">
                                <div class="textoc">8.6</div>
                            </a>
                        </div>
                        <div class="product-action product-action-1 p-abs">
                            <a href="#" class="icon-box icon-box-1">
                                <i class="fal fa-heart"></i>
                                <i class="fal fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-10 pb-20 product-content">
                        <a href="pages/stub.php"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="pages/stub.php"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                        <div class="cart-btn p-abs" style="display: flex;">
                            <a href="#" class="pt-40" style="align-items: flex-start;">
                                <div class="textoc">8.6</div>
                            </a>
                        </div>
                        <div class="product-action product-action-1 p-abs">
                            <a href="#" class="icon-box icon-box-1">
                                <i class="fal fa-heart"></i>
                                <i class="fal fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-10 pb-20 product-content">
                        <a href="pages/stub.php"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-5">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="pages/stub.php"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                        <div class="cart-btn p-abs" style="display: flex;">
                            <a href="#" class="pt-40" style="align-items: flex-start;">
                                <div class="textoc">8.6</div>
                            </a>
                        </div>
                        <div class="product-action product-action-1 p-abs">
                            <a href="#" class="icon-box icon-box-1">
                                <i class="fal fa-heart"></i>
                                <i class="fal fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-10 pb-20 product-content">
                        <a href="pages/stub.php"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="category-area" id="category-area">
    <div class="ml-75 mr-85 mt-40">
            <div class="col-xxl-12 col-xl-12 col-md-12 col-12 pl-0">
                <div class="single-category p-rel wow fadeInUp" data-wow-delay=".1s">
                    <a href="shop.php">
                        <div class="cat-thumb fix">
                            <div class="genretext mt-0">Актеры и создатели</div>
                        </div>
                    </a>
                </div>
            </div>
  <div class="top-selling-area top-selling-padding ">
    <div class="container mt-20 mb-0">
        <div class="row">
            <div class="col-xxl-1 col-xl-2 col-lg-3 col-md-3 col-sm-4 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="stub.php"><div class="round"><div class="roundtext">КС</div></div></a>
                    </div>
                    <div class="pt-0 pb-20 product-content">
                        <a href="stub.php"><div class="title">Кевин Смирнов</div><div class="role">режисёр</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-1 col-xl-2 col-lg-3 col-md-3 col-sm-4 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="stub.php"><div class="round"><div class="roundtext">КС</div></div></a>
                    </div>
                    <div class="pt-0 pb-20 product-content">
                        <a href="stub.php"><div class="title">Кевин Смирнов</div><div class="role">режисёр</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-1 col-xl-2 col-lg-3 col-md-3 col-sm-4 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="stub.php"><div class="round"><div class="roundtext">КС</div></div></a>
                    </div>
                    <div class="pt-0 pb-20 product-content">
                        <a href="stub.php"><div class="title">Кевин Смирнов</div><div class="role">режисёр</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-1 col-xl-2 col-lg-3 col-md-3 col-sm-4 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="stub.php"><div class="round"><div class="roundtext">КС</div></div></a>
                    </div>
                    <div class="pt-0 pb-20 product-content">
                        <a href="stub.php"><div class="title">Кевин Смирнов</div><div class="role">режисёр</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-1 col-xl-2 col-lg-3 col-md-3 col-sm-4 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="stub.php"><div class="round"><div class="roundtext">КС</div></div></a>
                    </div>
                    <div class="pt-0 pb-20 product-content">
                        <a href="stub.php"><div class="title">Кевин Смирнов</div><div class="role">режисёр</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-1 col-xl-2 col-lg-3 col-md-3 col-sm-4 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="stub.php"><div class="round"><div class="roundtext">КС</div></div></a>
                    </div>
                    <div class="pt-0 pb-20 product-content">
                        <a href="stub.php"><div class="title">Кевин Смирнов</div><div class="role">режисёр</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-1 col-xl-2 col-lg-3 col-md-3 col-sm-4 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="stub.php"><div class="round"><div class="roundtext">КС</div></div></a>
                    </div>
                    <div class="pt-0 pb-20 product-content">
                        <a href="stub.php"><div class="title">Кевин Смирнов</div><div class="role">режисёр</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-1 col-xl-2 col-lg-3 col-md-3 col-sm-4 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="stub.php"><div class="round"><div class="roundtext">КС</div></div></a>
                    </div>
                    <div class="pt-0 pb-20 product-content">
                        <a href="stub.php"><div class="title">Кевин Смирнов</div><div class="role">режисёр</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-1 col-xl-2 col-lg-3 col-md-3 col-sm-4 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="stub.php"><div class="round"><div class="roundtext">КС</div></div></a>
                    </div>
                    <div class="pt-0 pb-20 product-content">
                        <a href="stub.php"><div class="title">Кевин Смирнов</div><div class="role">режисёр</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-1 col-xl-2 col-lg-3 col-md-3 col-sm-4 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="stub.php"><div class="round"><div class="roundtext">КС</div></div></a>
                    </div>
                    <div class="pt-0 pb-20 product-content">
                        <a href="stub.php"><div class="title">Кевин Смирнов</div><div class="role">режисёр</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-1 col-xl-2 col-lg-3 col-md-3 col-sm-4 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="stub.php"><div class="round"><div class="roundtext">КС</div></div></a>
                    </div>
                    <div class="pt-0 pb-20 product-content">
                        <a href="stub.php"><div class="title">Кевин Смирнов</div><div class="role">режисёр</div></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-1 col-xl-2 col-lg-3 col-md-3 col-sm-4 pl-10 pr-10">
                <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                    <div class="product-thumb">
                        <a href="stub.php"><div class="round"><div class="roundtext">КС</div></div></a>
                    </div>
                    <div class="pt-0 pb-20 product-content">
                        <a href="stub.php"><div class="title">Кевин Смирнов</div><div class="role">режисёр</div></a>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
    <div class="stick"></div>
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