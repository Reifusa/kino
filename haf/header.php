<body>

    <header>
        <div id="header-sticky" class="header-area header-transparent header-sticky">
            <div class="header-main header-main-1 header-padding pl-80 pr-80">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xxl-9 col-xl-10 col-lg-10 col-md-11 col-sm-11 col-10 pl-5">
                        <div class="header-left p-rel d-flex align-items-center">
                                <div class="logo pr-60 d-inline-block">
                                    <a href="index.php" class="logotext">КИНОДОМ</a>
                                </div>
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="static">
                                                <a class="linetext" href="#index.php">Фильмы <i class="icon-arrow-down"></i></a>
                                                <ul class="mega-menu mega-full mega-menu-3-col">
                                                   <li class="has-dropdown">
                                                    <a href="index.php">Жанры</a>
                                                    <ul class="has-dropdown">
                                                    <?$querygenre = "SELECT * FROM `genres`";
                                                    $all = mysqli_query($db,$querygenre);
                                                    $all = mysqli_fetch_all($all);
                                                    foreach($all as $val){?>
                                                        <li><a href="index.php"><?=$val[1]?></a>
                                                        <?}?>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="index.php">Страна</a>
                                                    <ul class="has-dropdown">
                                                    <?$querygenre = "SELECT * FROM `states`";
                                                    $all = mysqli_query($db,$querygenre);
                                                    $all = mysqli_fetch_all($all);
                                                    foreach($all as $val){?>
                                                        <li><a href="index.php"><?=$val[1]?></a>
                                                        <?}?>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="index.php">Год</a>
                                                    <ul class="has-dropdown">
                                                    <?$querygenre = "SELECT * FROM `years`";
                                                    $all = mysqli_query($db,$querygenre);
                                                    $all = mysqli_fetch_all($all);
                                                    foreach($all as $val){?>
                                                        <li><a href="index.php"><?=$val[1]?></a>
                                                        <?}?>
                                                    </ul>
                                                </li>
                                             </ul>
                                        </li>
                                            <li class="static">
                                                <a class="linetext" href="#">Сериалы <i class="icon-arrow-down"></i></a>
                                                <ul class="mega-menu mega-full mega-menu-3-col">
                                                   <li class="has-dropdown">
                                                    <a href="index.php">Жанры</a>
                                                    <ul class="has-dropdown">
                                                    <?$querygenre = "SELECT * FROM `genres`";
                                                    $all = mysqli_query($db,$querygenre);
                                                    $all = mysqli_fetch_all($all);
                                                    foreach($all as $val){?>
                                                        <li><a href="index.php"><?=$val[1]?></a>
                                                        <?}?>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="index.php">Страна</a>
                                                    <ul class="has-dropdown">
                                                    <?$querygenre = "SELECT * FROM `states`";
                                                    $all = mysqli_query($db,$querygenre);
                                                    $all = mysqli_fetch_all($all);
                                                    foreach($all as $val){?>
                                                        <li><a href="index.php"><?=$val[1]?></a>
                                                        <?}?>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="index.php">Год</a>
                                                    <ul class="has-dropdown">
                                                    <?$querygenre = "SELECT * FROM `years`";
                                                    $all = mysqli_query($db,$querygenre);
                                                    $all = mysqli_fetch_all($all);
                                                    foreach($all as $val){?>
                                                        <li><a href="index.php"><?=$val[1]?></a>
                                                        <?}?>
                                                    </ul>
                                                </li>
                                             </ul>
                                        </li>
                                            <li class="static">
                                                <a class="linetext" href="index.php">Мультфильмы</a>
                                                <ul class="mega-menu mega-full mega-menu-3-col">
                                                   <li class="has-dropdown">
                                                    <a href="index.php">Жанры</a>
                                                    <ul class="has-dropdown">
                                                    <?$querygenre = "SELECT * FROM `genres`";
                                                    $all = mysqli_query($db,$querygenre);
                                                    $all = mysqli_fetch_all($all);
                                                    foreach($all as $val){?>
                                                        <li><a href="index.php"><?=$val[1]?></a>
                                                        <?}?>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="index.php">Страна</a>
                                                    <ul class="has-dropdown">
                                                    <?$querygenre = "SELECT * FROM `states`";
                                                    $all = mysqli_query($db,$querygenre);
                                                    $all = mysqli_fetch_all($all);
                                                    foreach($all as $val){?>
                                                        <li><a href="index.php"><?=$val[1]?></a>    
                                                        <?}?>   
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="index.php">Год</a>
                                                    <ul class="has-dropdown">
                                                    <?$querygenre = "SELECT * FROM `years`";
                                                    $all = mysqli_query($db,$querygenre);
                                                    $all = mysqli_fetch_all($all);
                                                    foreach($all as $val){?>
                                                        <li><a href="index.php"><?=$val[1]?></a>
                                                        <?}?>
                                                    </ul>
                                                </li>
                                             </ul>
                                            </li>
                                            <li>
                                                <a class="linetext" href="subscription.php">Подписки</a>
                                            </li>
                                            <li>
                                                <a class="linetext" href="index.php">Акции</a>
                                            </li>
                                            <li><a class="linetext" href="index.php">Контакты</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-1 col-sm-1 col-2">
                            <div class="header-right-wrapper d-flex align-items-center justify-content-end">
                                <div class="header-right d-flex align-items-center justify-content-end">
                                    <div class="header-icon p-rel d-flex">
                                        <div><a href="subscription.php" class="d-none d-xxl-inline-block"><div class='rounded-rectangle'><div class="buttontext">Оформить подписку</div></div></a></div>
                                        <div class="mt-10 ml-40"><a href="javascript:void(0)" class="search-toggle d-none d-sm-inline-block"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" viewBox="0 0 30 35" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.4931 20.6689C14.0318 21.4513 12.3718 21.8933 10.6117 21.8933C4.75101 21.8933 0 16.9923 0 10.9467C0 4.90099 4.75101 0 10.6117 0C16.4724 0 21.2234 4.90099 21.2234 10.9467C21.2234 13.7389 20.2099 16.287 18.5418 18.2208L29.616 31.8352C30.1986 32.5514 30.108 33.6191 29.4138 34.22L28.9703 34.6039C28.276 35.2049 27.241 35.1115 26.6584 34.3953L15.4955 20.6718C15.4947 20.6709 15.4939 20.6699 15.4931 20.6689ZM17.9414 10.9467C17.9414 15.1225 14.6598 18.5078 10.6117 18.5078C6.56359 18.5078 3.28196 15.1225 3.28196 10.9467C3.28196 6.77079 6.56359 3.38557 10.6117 3.38557C14.6598 3.38557 17.9414 6.77079 17.9414 10.9467Z" fill="#C4C4C4"/></svg></i></a></div>
                                        <?if(isset($_SESSION["user"])){ ?>
                                        <div class="mt-10"><a href="profile.php" class="d-none d-lg-none d-xl-block d-sm-none  ml-40"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="35" viewBox="0 0 25 35" fill="none"><path d="M18.1839 10.3839C18.1839 13.392 17.8621 15.3307 17.0838 16.5191C16.4176 17.5364 15.2184 18.2753 12.5376 18.2753C9.85647 18.2753 8.63155 17.5355 7.94705 16.5088C7.15485 15.3206 6.81609 13.3824 6.81609 10.3839C6.81609 7.40426 7.1469 5.15607 7.99829 3.68024C8.40294 2.97881 8.92181 2.45928 9.60098 2.10218C10.2921 1.73879 11.2333 1.5 12.5376 1.5C13.8422 1.5 14.7767 1.7389 15.4584 2.10003C16.1277 2.45453 16.6371 2.97048 17.0336 3.67023C17.8702 5.14659 18.1839 7.39552 18.1839 10.3839ZM23.1762 30.8349C23.3605 31.5895 22.8408 32.4926 21.7199 32.6864C19.4841 33.073 16.1784 33.5 12.5 33.5C8.82158 33.5 5.51591 33.073 3.28006 32.6864C2.15919 32.4926 1.63953 31.5895 1.8238 30.8349C3.01687 25.9493 7.35826 22.3542 12.5 22.3542C17.6417 22.3542 21.9831 25.9493 23.1762 30.8349Z" stroke="#C4C4C4" stroke-width="3"/></svg></a></div>
                                    <? }else{ ?>
                                        <div class="mt-10"><a href="login.php" class="d-none d-lg-none d-xl-block d-sm-none  ml-40"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="35" viewBox="0 0 25 35" fill="none"><path d="M18.1839 10.3839C18.1839 13.392 17.8621 15.3307 17.0838 16.5191C16.4176 17.5364 15.2184 18.2753 12.5376 18.2753C9.85647 18.2753 8.63155 17.5355 7.94705 16.5088C7.15485 15.3206 6.81609 13.3824 6.81609 10.3839C6.81609 7.40426 7.1469 5.15607 7.99829 3.68024C8.40294 2.97881 8.92181 2.45928 9.60098 2.10218C10.2921 1.73879 11.2333 1.5 12.5376 1.5C13.8422 1.5 14.7767 1.7389 15.4584 2.10003C16.1277 2.45453 16.6371 2.97048 17.0336 3.67023C17.8702 5.14659 18.1839 7.39552 18.1839 10.3839ZM23.1762 30.8349C23.3605 31.5895 22.8408 32.4926 21.7199 32.6864C19.4841 33.073 16.1784 33.5 12.5 33.5C8.82158 33.5 5.51591 33.073 3.28006 32.6864C2.15919 32.4926 1.63953 31.5895 1.8238 30.8349C3.01687 25.9493 7.35826 22.3542 12.5 22.3542C17.6417 22.3542 21.9831 25.9493 23.1762 30.8349Z" stroke="#C4C4C4" stroke-width="3"/></svg></a></div>
                                        <?}?>
                                        </div>

                                </div>
                                <div class="header-bar ml-20 d-lg-block d-xl-none">
                                    <button type="button" class="header-bar-btn" data-bs-toggle="modal" data-bs-target="#offCanvasModal">
                                        <span class="span mt-1"></span>
                                        <span class="span mt-1"></span>
                                        <span class="span mt-1"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->


    <!-- search area start -->
    <div class="search__area">
        <div class="search__close">
            <button type="button" class="search__close-btn search-close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="search__wrapper">
            <h4>Поиск</h4>
            <div class="search__form">
                <form method="GET" action="product-details-grid.php">
                    <div class="search__input">
                        <input type="text" name="name" placeholder="Введите название фильма">
                        <button type="submit">
                            <i class="far fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- search area end -->


    <!-- sidebar area start -->
    <section class="offcanvas__area">
        <div class="modal fade" id="offCanvasModal" tabindex="-1" aria-labelledby="offCanvasModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="offcanvas__wrapper">
                        <div class="offcanvas__top d-flex align-items-center mb-60 justify-content-between">
                            <div class="logo">
                                <a href="index.php" class="logotext">КИНОДОМ
                                   <!-- <img src="assets/img/logo/logo-black.png" alt="logo"> -->
                                </a>
                             </div>
                           <div class="offcanvas__close">
                              <button class="offcanvas__close-btn" data-bs-toggle="modal" data-bs-target="#offCanvasModal">
                                 <svg viewBox="0 0 22 22">
                                    <path d="M12.41,11l5.29-5.29c0.39-0.39,0.39-1.02,0-1.41s-1.02-0.39-1.41,0L11,9.59L5.71,4.29c-0.39-0.39-1.02-0.39-1.41,0
                                    s-0.39,1.02,0,1.41L9.59,11l-5.29,5.29c-0.39,0.39-0.39,1.02,0,1.41C4.49,17.9,4.74,18,5,18s0.51-0.1,0.71-0.29L11,12.41l5.29,5.29
                                    C16.49,17.9,16.74,18,17,18s0.51-0.1,0.71-0.29c0.39-0.39,0.39-1.02,0-1.41L12.41,11z"/>
                                 </svg>
                              </button>
                           </div>
                        </div>
                        <div class="offcanvas__content p-relative z-index-1">
                           <div class="canvas__menu">
                              <div class="mobile-menu fix"></div>
                           </div>
                           <div class="offcanvas__action mb-15">
                              <a href="profile.php" class="linetext">Профиль</a>
                           </div>
                           <div class="offcanvas__action mb-15 ">
                              <a href="index.php" class="has-tag">
                                 <svg viewBox="0 0 22 22">
                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                    L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                    c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                    C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                    c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                    c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                    c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                    c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                    c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                 </svg>                           <?
                                 $iduser = $_SESSION['user']['id'];
                                 $quernum = "SELECT COUNT(*) AS total_items FROM `wishlist` where `wishlist`.`id пользователя` = '$iduser'";
                                 $num = mysqli_query($db, $quernum);
                                 $num = mysqli_fetch_assoc($num);  
                                 if($num){
                                    $total = $num['total_items'];?>
                                    <span class="tag"><?=$total?></span><?
                                 }  
                                 ?>
                              </a>
                           </div>
                           <div class="offcanvas__action mb-15 d-sm-block">
                              <a href="subscription.php" class="has-tag">
                                <i class="far fa-shopping-bag"></i>
                                
                              </a>
                           </div>
                           <div class="offcanvas__social mt-15">
                              <ul>
                                 <li>
                                    <a href="#"><i class="fab fa-vk"></i></a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fab fa-odnoklassniki"></i></a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fab fa-viber"></i></a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fab fa-telegram"></i></a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        
     </section>
     <!-- sidebar area end -->