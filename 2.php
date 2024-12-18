<body>

    <!-- header area start -->
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
                                                        <li><a href="index.php"><?=$val[1]?></a></li>
                                                        <?}?>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="index.php">Страна</a>
                                                    <ul class="has-dropdown">
                                                    <?$querygenre = "SELECT * FROM `countries`";
                                                    $all = mysqli_query($db,$querygenre);
                                                    $all = mysqli_fetch_all($all);
                                                    foreach($all as $val){?>
                                                        <li><a href="index.php"><?=$val[1]?></a></li>
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
                                                        <li><a href="index.php"><?=$val[1]?></a></li>
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
                                                        <li><a href="index.php"><?=$val[1]?></a></li>
                                                        <?}?>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="index.php">Страна</a>
                                                    <ul class="has-dropdown">
                                                    <?$querygenre = "SELECT * FROM `countries`";
                                                    $all = mysqli_query($db,$querygenre);
                                                    $all = mysqli_fetch_all($all);
                                                    foreach($all as $val){?>
                                                        <li><a href="index.php"><?=$val[1]?></a></li>
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
                                                        <li><a href="index.php"><?=$val[1]?></a></li>
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
                                                        <li><a href="index.php"><?=$val[1]?></a></li>
                                                        <?}?>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="index.php">Страна</a>
                                                    <ul class="has-dropdown">
                                                    <?$querygenre = "SELECT * FROM `countries`";
                                                    $all = mysqli_query($db,$querygenre);
                                                    $all = mysqli_fetch_all($all);
                                                    foreach($all as $val){?>
                                                        <li><a href="index.php"><?=$val[1]?></a></li>
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
                                                        <li><a href="index.php"><?=$val[1]?></a></li>
                                                        <?}?>
                                                    </ul>
                                                </li>
                                             </ul>
                                            </li>
                                            <li>
                                                <a class="linetext" href="index.php">Подписки</a>
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
                                        <div><a href="login.php" class="d-none d-xxl-inline-block"><div class='rounded-rectangle'><div class="buttontext">Оформить подписку</div></div></a></div>
                                        <div class="mt-10 ml-40"><a href="javascript:void(0)" class="search-toggle d-none d-sm-inline-block"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" viewBox="0 0 30 35" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.4931 20.6689C14.0318 21.4513 12.3718 21.8933 10.6117 21.8933C4.75101 21.8933 0 16.9923 0 10.9467C0 4.90099 4.75101 0 10.6117 0C16.4724 0 21.2234 4.90099 21.2234 10.9467C21.2234 13.7389 20.2099 16.287 18.5418 18.2208L29.616 31.8352C30.1986 32.5514 30.108 33.6191 29.4138 34.22L28.9703 34.6039C28.276 35.2049 27.241 35.1115 26.6584 34.3953L15.4955 20.6718C15.4947 20.6709 15.4939 20.6699 15.4931 20.6689ZM17.9414 10.9467C17.9414 15.1225 14.6598 18.5078 10.6117 18.5078C6.56359 18.5078 3.28196 15.1225 3.28196 10.9467C3.28196 6.77079 6.56359 3.38557 10.6117 3.38557C14.6598 3.38557 17.9414 6.77079 17.9414 10.9467Z" fill="#C4C4C4"/></svg></i></a></div>
                                        <div class="mt-10"><a href="profile.php" class="d-none d-lg-none d-xl-block d-sm-none  ml-40"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="35" viewBox="0 0 25 35" fill="none"><path d="M18.1839 10.3839C18.1839 13.392 17.8621 15.3307 17.0838 16.5191C16.4176 17.5364 15.2184 18.2753 12.5376 18.2753C9.85647 18.2753 8.63155 17.5355 7.94705 16.5088C7.15485 15.3206 6.81609 13.3824 6.81609 10.3839C6.81609 7.40426 7.1469 5.15607 7.99829 3.68024C8.40294 2.97881 8.92181 2.45928 9.60098 2.10218C10.2921 1.73879 11.2333 1.5 12.5376 1.5C13.8422 1.5 14.7767 1.7389 15.4584 2.10003C16.1277 2.45453 16.6371 2.97048 17.0336 3.67023C17.8702 5.14659 18.1839 7.39552 18.1839 10.3839ZM23.1762 30.8349C23.3605 31.5895 22.8408 32.4926 21.7199 32.6864C19.4841 33.073 16.1784 33.5 12.5 33.5C8.82158 33.5 5.51591 33.073 3.28006 32.6864C2.15919 32.4926 1.63953 31.5895 1.8238 30.8349C3.01687 25.9493 7.35826 22.3542 12.5 22.3542C17.6417 22.3542 21.9831 25.9493 23.1762 30.8349Z" stroke="#C4C4C4" stroke-width="3"/></svg></a></div>
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
                              <a href="login.php" class="linetext">Регистрация/Вход</a>
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
                                 </svg>
                                 <span class="tag">2</span>
                              </a>
                           </div>
                           <div class="offcanvas__action mb-15 d-sm-block">
                              <a href="index.php" class="has-tag">
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

    <main>
        <!-- slider area start -->
        <section class="slider-area pb-20 p-rel mt-155 d-xl-block d-lg-block d-sm-none">
            <div class="slider-active dot-style dot-style-1 dot-right">
                <div class="single-slider slider-height">
                    <div class="block1" >
                        <div class="stocktext">4 месяца фильмов исериалов за 1 ₽</div>
                        <svg class="ml-60 d-lg-none d-xl-block" xmlns="http://www.w3.org/2000/svg" width="351" height="150" viewBox="0 0 351 150" fill="none"><path d="M67.8691 146.053C67.8691 144.527 70.0176 143.289 72.668 143.289H278.332C280.982 143.289 283.131 144.527 283.131 146.053V147.237C283.131 148.763 280.982 150 278.332 150H72.668C70.0176 150 67.8691 148.763 67.8691 147.237V146.053Z" fill="url(#paint0_linear_115_55)"/><path d="M106.643 130.263H243.752L254.338 143.289H96.6621L106.643 130.263Z" fill="url(#paint1_linear_115_55)"/><path d="M0 5.92106C0 2.65095 4.60395 0 10.2832 0H340.717C346.396 0 351 2.65095 351 5.92105V124.342C351 127.612 346.396 130.263 340.717 130.263H10.2832C4.60395 130.263 0 127.612 0 124.342V5.92106Z" fill="url(#paint2_linear_115_55)"/><path d="M10.9688 10.2632C10.9688 8.08308 14.038 6.31579 17.8242 6.31579H333.176C336.962 6.31579 340.031 8.08309 340.031 10.2632V114.079C340.031 116.259 336.962 118.026 333.176 118.026H17.8242C14.038 118.026 10.9688 116.259 10.9688 114.079V10.2632Z" fill="#C4C4C4"/><defs><linearGradient id="paint0_linear_115_55" x1="5.85858e-06" y1="37.4993" x2="351.645" y2="39.5534" gradientUnits="userSpaceOnUse"><stop stop-color="#7871AA"/><stop offset="1" stop-color="#F15025"/></linearGradient><linearGradient id="paint1_linear_115_55" x1="5.85858e-06" y1="37.4993" x2="351.645" y2="39.5534" gradientUnits="userSpaceOnUse"><stop stop-color="#7871AA"/><stop offset="1" stop-color="#F15025"/></linearGradient><linearGradient id="paint2_linear_115_55" x1="5.85858e-06" y1="37.4993" x2="351.645" y2="39.5534" gradientUnits="userSpaceOnUse"><stop stop-color="#7871AA"/><stop offset="1" stop-color="#F15025"/></linearGradient></defs></svg>
                        <svg class="ml-20 d-lg-none d-xl-block" xmlns="http://www.w3.org/2000/svg" width="50" height="84" viewBox="0 0 50 84" fill="none"><path d="M0 8.8C0 4.21604 3.73096 0.5 8.33333 0.5H41.6667C46.269 0.5 50 4.21604 50 8.8V75.2C50 79.784 46.269 83.5 41.6667 83.5H8.33333C3.73096 83.5 0 79.784 0 75.2V8.8Z" fill="url(#paint0_linear_115_9)"/><path d="M8.33333 9.63C8.33333 8.25481 9.45262 7.14 10.8333 7.14H39.1667C40.5474 7.14 41.6667 8.25481 41.6667 9.63V66.9C41.6667 68.2752 40.5474 69.39 39.1667 69.39H10.8333C9.45262 69.39 8.33333 68.2752 8.33333 66.9V9.63Z" fill="#C4C4C4"/><path d="M18.3333 77.275C18.3333 76.5874 18.893 76.03 19.5833 76.03H30.4167C31.107 76.03 31.6667 76.5874 31.6667 77.275C31.6667 77.9626 31.107 78.52 30.4167 78.52H19.5833C18.893 78.52 18.3333 77.9626 18.3333 77.275Z" fill="#C4C4C4"/><defs><linearGradient id="paint0_linear_115_9" x1="-4.16667" y1="39.51" x2="48.5855" y2="81.631" gradientUnits="userSpaceOnUse"><stop stop-color="#7871AA"/><stop offset="1" stop-color="#F15025"/></linearGradient></defs></svg>
                      </div>
                  
                      <div class="block2">
                        <div class="desctext">Получите доступ к огромной библиотеке фильмов и сериалов на целых четыре месяца всего за 1 ₽. <br> Насладитесь непрерывным просмотром самых популярных фильмов и самых захватывающих сериалов, не переплачивая. <br> Откройте мир кино уже сегодня и погрузитесь в захватывающие истории по доступной цене.</div>
                        <svg class="ml-60 d-lg-none d-xl-block" xmlns="http://www.w3.org/2000/svg" width="163" height="138" viewBox="0 0 163 138" fill="none"><path d="M20.375 7.84091C20.375 3.51049 23.8835 0 28.2115 0H134.788C139.116 0 142.625 3.51049 142.625 7.84091V80.7614C142.625 85.0918 139.116 88.6023 134.788 88.6023H28.2115C23.8835 88.6023 20.375 85.0918 20.375 80.7614V7.84091Z" fill="url(#paint0_linear_115_30)"/><path d="M0 130.943C0 129.644 1.05256 128.591 2.35096 128.591H160.649C161.947 128.591 163 129.644 163 130.943V135.648C163 136.947 161.947 138 160.649 138H2.35096C1.05256 138 0 136.947 0 135.648V130.943Z" fill="url(#paint1_linear_115_30)"/><path d="M20.375 81.5455H142.233L163 130.159H0L20.375 81.5455Z" fill="url(#paint2_linear_115_30)"/><path d="M23.9429 94.3936C24.1517 93.7458 24.7543 93.3068 25.4345 93.3068H137.565C138.246 93.3068 138.848 93.7458 139.057 94.3936L145.882 115.564C146.209 116.577 145.454 117.614 144.391 117.614H18.6092C17.5458 117.614 16.7911 116.577 17.1175 115.564L23.9429 94.3936Z" fill="#C4C4C4"/><path d="M28.2115 15.6818C28.2115 11.3514 31.7201 7.84091 36.0481 7.84091H126.952C131.28 7.84091 134.788 11.3514 134.788 15.6818V65.0795C134.788 69.41 131.28 72.9205 126.952 72.9205H36.0481C31.7201 72.9205 28.2115 69.41 28.2115 65.0795V15.6818Z" fill="#C4C4C4"/><defs><linearGradient id="paint0_linear_115_30" x1="0" y1="0" x2="184.047" y2="110.865" gradientUnits="userSpaceOnUse"><stop stop-color="#7871AA"/><stop offset="1" stop-color="#F15025"/></linearGradient><linearGradient id="paint1_linear_115_30" x1="2.72065e-06" y1="34.4994" x2="163.304" y2="34.9809" gradientUnits="userSpaceOnUse"><stop stop-color="#7871AA"/><stop offset="1" stop-color="#F15025"/></linearGradient><linearGradient id="paint2_linear_115_30" x1="20.7668" y1="2.74204e-05" x2="177.332" y2="18.8299" gradientUnits="userSpaceOnUse"><stop stop-color="#7871AA"/><stop offset="1" stop-color="#F15025"/></linearGradient></defs></svg>
                        <svg class="ml-20 d-lg-none d-xl-block" xmlns="http://www.w3.org/2000/svg" width="168" height="120" viewBox="0 0 168 120" fill="none"><path d="M0 24C0 10.7452 10.7452 0 24 0H144C157.255 0 168 10.7452 168 24V96C168 109.255 157.255 120 144 120H24C10.7452 120 0 109.255 0 96V24Z" fill="url(#paint0_linear_185_346)"/><path d="M6 30C6 16.7452 16.7452 6 30 6H138C151.255 6 162 16.7452 162 30V90C162 103.255 151.255 114 138 114H30C16.7452 114 6 103.255 6 90V30Z" fill="#C4C4C4"/><defs><linearGradient id="paint0_linear_185_346" x1="2.80411e-06" y1="29.9995" x2="168.312" y2="30.5877" gradientUnits="userSpaceOnUse"><stop stop-color="#7871AA"/><stop offset="1" stop-color="#F15025"/></linearGradient></defs></svg>
                        <svg class="ml-20 d-lg-none d-xl-block" xmlns="http://www.w3.org/2000/svg" width="100" height="138" viewBox="0 0 100 138" fill="none"><path d="M3.02805 40H96.9399C97.2561 37.6549 96.4792 32.744 90.8417 31.8612C91.2754 27.8889 88.0411 25.2407 86.3697 24.4131C87.7791 14.2617 79.6392 11.6321 75.393 11.5863C66.0425 -9.65498 45.4442 2.75868 45.4442 13.6552C42.8423 12.8828 40.9271 13.7935 40.2947 14.3454C33.5189 1.93161 21.7291 11.4483 23.2198 18.0695C9.99352 14.7592 8.76485 25.3337 9.8038 31.0347C3.84114 31.9174 2.80219 37.3794 3.02805 40Z" fill="url(#paint0_linear_194_28)"/><path d="M14.3243 138H86.0811L100 45H0L14.3243 138Z" fill="url(#paint1_linear_194_28)"/><path d="M65.4054 138H74.5946L81.8919 45H72.973L65.4054 138Z" fill="#C4C4C4"/><path d="M45.4054 138H54.5946V45H45.4054V138Z" fill="#C4C4C4"/><path d="M25.4054 138H34.5946L27.027 45H18.1081L25.4054 138Z" fill="#C4C4C4"/><defs><linearGradient id="paint0_linear_194_28" x1="1.66911e-06" y1="34.4994" x2="100.187" y2="34.6806" gradientUnits="userSpaceOnUse"><stop stop-color="#7871AA"/><stop offset="1" stop-color="#F15025"/></linearGradient><linearGradient id="paint1_linear_194_28" x1="1.66911e-06" y1="34.4994" x2="100.187" y2="34.6806" gradientUnits="userSpaceOnUse"><stop stop-color="#7871AA"/><stop offset="1" stop-color="#F15025"/></linearGradient></defs></svg>
                      </div>
                  
                      <div class="button"><a href="login.php" class="buttontext2" style="text-decoration: none;">Попробовать бесплатно</a></div>
                </div>
                <div class="single-slider slider-height" data-background="assets/img/slider/slider-2.jpg">
                </div>
                <div class="single-slider slider-height" data-background="assets/img/slider/slider-3.jpg">
                </div>
                <div class="single-slider slider-height" data-background="assets/img/slider/slider-1.jpg">
                </div>
            </div>
            <div class="slider-scroll p-abs">
                <a href="#category-area"><i class="fal fa-angle-double-down"></i></a>
            </div>
        </section>
        <!-- slider area end -->

        <!-- category area start -->
        <div class="category-area" id="category-area">
            <div class="ml-80 mr-80">
                    <div class="col-xxl-12 col-xl-12 col-md-12 col-12 pl-0">
                        <div class="single-category p-rel wow fadeInUp" data-wow-delay=".1s">
                            <a href="#">
                                <div class="cat-thumb fix">
                                    <div class="genretext mt-0">Лучшее</div>
                                </div>
                            </a>
                        </div>
                    </div>
        <!-- category area end -->

        <!-- top selling area start -->
        <div class="top-selling-area top-selling-padding ">
            <div class="container mt-20 mb-0">
                <div class="row">
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                        <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                            <div class="product-thumb">
                                <a href="index.php"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                                <div class="cart-btn p-abs" style="display: flex;">
                                    <a href="#" class="pt-40" style="align-items: flex-start;">
                                        <div class="textoc">8.6</div>
                                    </a>
                                </div>
                                <div class="product-action product-action-1 p-abs">
                                    <a href="login.php" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-10 pb-20 product-content">
                                <a href="index.php"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                        <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                            <div class="product-thumb">
                                <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                                <div class="cart-btn p-abs" style="display: flex;">
                                    <a href="#" class="pt-40" style="align-items: flex-start;">
                                        <div class="textoc">8.6</div>
                                    </a>
                                </div>
                                <div class="product-action product-action-1 p-abs">
                                    <a href="login.php" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-10 pb-20 product-content">
                                <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                        <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                            <div class="product-thumb">
                                <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                                <div class="cart-btn p-abs" style="display: flex;">
                                    <a href="#" class="pt-40" style="align-items: flex-start;">
                                        <div class="textoc">8.6</div>
                                    </a>
                                </div>
                                <div class="product-action product-action-1 p-abs">
                                    <a href="login.php" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-10 pb-20 product-content">
                                <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                        <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                            <div class="product-thumb">
                                <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                                <div class="cart-btn p-abs" style="display: flex;">
                                    <a href="#" class="pt-40" style="align-items: flex-start;">
                                        <div class="textoc">8.6</div>
                                    </a>
                                </div>
                                <div class="product-action product-action-1 p-abs">
                                    <a href="login.php" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-10 pb-20 product-content">
                                <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                        <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                            <div class="product-thumb">
                                <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                                <div class="cart-btn p-abs" style="display: flex;">
                                    <a href="#" class="pt-40" style="align-items: flex-start;">
                                        <div class="textoc">8.6</div>
                                    </a>
                                </div>
                                <div class="product-action product-action-1 p-abs">
                                    <a href="login.php" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-10 pb-20 product-content">
                                <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-5">
                        <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                            <div class="product-thumb">
                                <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                                <div class="cart-btn p-abs" style="display: flex;">
                                    <a href="#" class="pt-40" style="align-items: flex-start;">
                                        <div class="textoc">8.6</div>
                                    </a>
                                </div>
                                <div class="product-action product-action-1 p-abs">
                                    <a href="login.php" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-10 pb-20 product-content">
                                <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                        <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                            <div class="product-thumb">
                                <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                                <div class="cart-btn p-abs" style="display: flex;">
                                    <a href="#" class="pt-40" style="align-items: flex-start;">
                                        <div class="textoc">8.6</div>
                                    </a>
                                </div>
                                <div class="product-action product-action-1 p-abs">
                                    <a href="login.php" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-10 pb-20 product-content">
                                <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                        <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                            <div class="product-thumb">
                                <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                                <div class="cart-btn p-abs" style="display: flex;">
                                    <a href="#" class="pt-40" style="align-items: flex-start;">
                                        <div class="textoc">8.6</div>
                                    </a>
                                </div>
                                <div class="product-action product-action-1 p-abs">
                                    <a href="login.php" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-10 pb-20 product-content">
                                <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                        <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                            <div class="product-thumb">
                                <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                                <div class="cart-btn p-abs" style="display: flex;">
                                    <a href="#" class="pt-40" style="align-items: flex-start;">
                                        <div class="textoc">8.6</div>
                                    </a>
                                </div>
                                <div class="product-action product-action-1 p-abs">
                                    <a href="login.php" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-10 pb-20 product-content">
                                <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                        <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                            <div class="product-thumb">
                                <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                                <div class="cart-btn p-abs" style="display: flex;">
                                    <a href="#" class="pt-40" style="align-items: flex-start;">
                                        <div class="textoc">8.6</div>
                                    </a>
                                </div>
                                <div class="product-action product-action-1 p-abs">
                                    <a href="login.php" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-10 pb-20 product-content">
                                <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
                        <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                            <div class="product-thumb">
                                <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                                <div class="cart-btn p-abs" style="display: flex;">
                                    <a href="#" class="pt-40" style="align-items: flex-start;">
                                        <div class="textoc">8.6</div>
                                    </a>
                                </div>
                                <div class="product-action product-action-1 p-abs">
                                    <a href="login.php" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-10 pb-20 product-content">
                                <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-5">
                        <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                            <div class="product-thumb">
                                <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                                <div class="cart-btn p-abs" style="display: flex;">
                                    <a href="#" class="pt-40" style="align-items: flex-start;">
                                        <div class="textoc">8.6</div>
                                    </a>
                                </div>
                                <div class="product-action product-action-1 p-abs">
                                    <a href="login.php" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-10 pb-20 product-content">
                                <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-5">
                        <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                            
                            <div class="product-thumb">
                                <a href="addfilm.php"><div class="img" style="background-image: url('assets/img/Group\ 81.png'); align-content: center;"></div></a>
                            </div>
                        </div>
                    </div>



        <!-- top selling area end -->
        </div>

        </div>
        </div>




        <div class="col-xxl-12 col-xl-12 col-md-12 col-12 pl-0">
            <div class="single-category p-rel wow fadeInUp" data-wow-delay=".1s">
                <a href="#">
                    <div class="cat-thumb fix">
                        <div class="genretext mt-0">Боевики</div>
                    </div>
                </a>
            </div>
        </div>
<!-- category area end -->

<!-- top selling area start -->

            
<div class="top-selling-area top-selling-padding ">
<div class="container mt-20 mb-0">
    <div class="row">
    <?$queyall = "SELECT * FROM `films` where `films`.`id жанра` = '1'";
           $all = mysqli_query($db,$queyall);
           $all = mysqli_fetch_all($all);
           print_r($all);
           foreach($all as $val){
            ?>
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">

                    <a class="containerfilm" href="/product-details-grid.php"><img src="assets/img/posters/<?=$val[9]?>" class="img"></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc"><?=$val[4]?></div>
                        </a>
                        <a href="/product-details-grid.php" style="margin-top: auto; margin-left: auto;"><div class="age"><div class="agetext"><?=$val[5]?>+</div></div></a>
                    </div>
                    <!-- <div class="product-action-films product-action p-abs">
                    <?if($val[10]=== "Эксклюзив"){
                        ?><div class="label"><div class="labeltext">эксклюзив</div></div><?}?>
                    </div>
                    <div class="product-action-films films  p-abs">
                    <?if($val[10]=== "Эксклюзив"){
                        ?><div class="label"><div class="labeltext">эксклюзив</div></div><?}?>
                    </div> -->
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="/product-details-grid.php"><div class="title"><?=$val[1]?></div><div class="price"><?=$val[10]?></div></a>
                </div>
            </div>
        </div>
        <?}?>
        </div>
        </div>
        </div>

        <div class="col-xxl-12 col-xl-12 col-md-12 col-12 pl-0">
            <div class="single-category p-rel wow fadeInUp" data-wow-delay=".1s">
                <a href="#">
                    <div class="cat-thumb fix">
                        <div class="genretext mt-0">Исторические</div>
                    </div>
                </a>
            </div>
        </div>
<!-- category area end -->

<!-- top selling area start -->
<div class="top-selling-area top-selling-padding ">
<div class="container mt-20 mb-0">
    <div class="row">
    <?$queyall = "SELECT * FROM `films` where `films`.`id жанра` = '7'";
           $all = mysqli_query($db,$queyall);
           $all = mysqli_fetch_all($all);
           foreach($all as $val){

            ?>
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="/product-details-grid.php"><img src="assets/img/posters/<?=$val[9]?>" class="img" ></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc"><?=$val[4]?></div>
                        </a>
                        <a href="/product-details-grid.php" style="margin-top: auto; margin-left: auto;"><div class="age"><div class="agetext"><?=$val[5]?>+</div></div></a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="product-details-grid.php"><div class="title"><?=$val[1]?></div><div class="price"><?=$val[10]?></div></a>
                </div>
            </div>
        </div>
        <?}?>
        
        </div>
        </div>
        </div>

        <div class="col-xxl-12 col-xl-12 col-md-12 col-12 pl-0">
            <div class="single-category p-rel wow fadeInUp" data-wow-delay=".1s">
                <a href="#">
                    <div class="cat-thumb fix">
                        <div class="genretext mt-0">Лучшее за месяц</div>
                    </div>
                </a>
            </div>
        </div>
<!-- category area end -->

<!-- top selling area start -->
<div class="top-selling-area top-selling-padding ">
<div class="container mt-20 mb-0">
    <div class="row">
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-5">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>

        <div class="col-xxl-12 col-xl-12 col-md-12 col-12 pl-0">
            <div class="single-category p-rel wow fadeInUp" data-wow-delay=".1s">
                <a href="#">
                    <div class="cat-thumb fix">
                        <div class="genretext mt-0">Лучшее за месяц</div>
                    </div>
                </a>
            </div>
        </div>
<!-- category area end -->

<!-- top selling area start -->
<div class="top-selling-area top-selling-padding ">
<div class="container mt-20 mb-0">
    <div class="row">
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-5">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>

        <div class="col-xxl-12 col-xl-12 col-md-12 col-12 pl-0">
            <div class="single-category p-rel wow fadeInUp" data-wow-delay=".1s">
                <a href="#">
                    <div class="cat-thumb fix">
                        <div class="genretext mt-0">Лучшее за месяц</div>
                    </div>
                </a>
            </div>
        </div>
<!-- category area end -->

<!-- top selling area start -->
<div class="top-selling-area top-selling-padding ">
<div class="container mt-20 mb-0">
    <div class="row">
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-5">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>

        <div class="col-xxl-12 col-xl-12 col-md-12 col-12 pl-0">
            <div class="single-category p-rel wow fadeInUp" data-wow-delay=".1s">
                <a href="#">
                    <div class="cat-thumb fix">
                        <div class="genretext mt-0">Лучшее за месяц</div>
                    </div>
                </a>
            </div>
        </div>
<!-- category area end -->

<!-- top selling area start -->
<div class="top-selling-area top-selling-padding ">
<div class="container mt-20 mb-0">
    <div class="row">
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-10">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="label"><div class="labeltext">эксклюзив</div></div><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
                </div>
            </div>
        </div>

        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 pl-10 pr-5">
            <div class="single-product mb-20 wow fadeInUp" data-wow-delay=".9s">
                <div class="product-thumb">
                    <a href="#"><div class="img" style="background-image: url('assets/img/products/fashion/1.jpg');"><div class="age"><div class="agetext">16+</div></div></div></a>
                    <div class="cart-btn p-abs" style="display: flex;">
                        <a href="#" class="pt-40" style="align-items: flex-start;">
                            <div class="textoc">8.6</div>
                        </a>
                    </div>
                    <div class="product-action product-action-1 p-abs">
                        <a href="login.php" class="icon-box icon-box-1">
                            <i class="fal fa-heart"></i>
                            <i class="fal fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-10 pb-20 product-content">
                    <a href="#"><div class="title">Eaet gconomal!</div><div class="price">Бесплатно</div></a>
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