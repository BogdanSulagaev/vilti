<!DOCTYPE html> 
<html lang="ru">
<head>
    <title>Загородный дом как семейное наследие</title> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <!-- Заменить -->
    <meta name="robots" content="noindex, nofollow">

    <!-- <meta name="robots" content="all">
    <link rel="canonical" href="#">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json"> 
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta content="telephone=no" name="format-detection">
    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="./img/ogimg.jpg"/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>-->
    <!-- style -->
    <link rel='stylesheet' href='css/style.css?v=<?= filemtime('css/style.css') ?>' type='text/css'>

    <!-- fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400..700&family=Wix+Madefor+Display:wght@400..800&family=Wix+Madefor+Text:wght@400..800&display=swap" rel="stylesheet"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Wix+Madefor+Display:wght@400..800&family=Wix+Madefor+Text:wght@400..800&display=swap" rel="stylesheet">


    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
</head>
<body>
    <!-- header -->
    <header class="header fade-in">
        <div class="header__row header__row--top">
            <div class="header__inner">
                <div class="header__left">
                    <button class="btn-burger" type="button">
                        <img class="lazyload main" src="img/default.png" data-src="img/icons/burger.svg" alt="Catalog">
                        <img class="lazyload letter" src="img/default.png" data-src="img/icons/m.svg" alt="img">
                    </button>
                    <form class="search">
                        <input type="text" placeholder="Поиск" class="search__input">
                        <button class="search__btn btn-search" type="button">
                            <img class="lazyload main" src="img/default.png" data-src="img/icons/search.svg" alt="Search">
                            <img class="lazyload letter" src="img/default.png" data-src="img/icons/s.svg" alt="img">
                        </button>
                    </form>
                    <a href="#" class="btn-projects btn-gradient">
                        <img class="lazyload main" src="img/default.png" data-src="img/icons/projects.svg" alt="Search">
                        <img class="lazyload letter" src="img/default.png" data-src="img/icons/g.svg" alt="img">
                        Бутик резиденций
                    </a>
                    <?php include 'templates/components/socials/phone.php'; ?>
                    <button class="header__burger" type="button">Меню<img class="lazyload main" src="img/default.png" data-src="img/icons/burger.svg" alt="Catalog"></button>
                    
                </div>

                <div class="header__logo">
                    <?php include('templates/components/logo.php'); ?>
                </div>
                <div class="header__right">
                    
                    <?php include 'templates/components/socials/phone.php'; ?>

                    <?php include 'templates/components/lang.php'; ?>

                    <?php include 'templates/components/socials/messenger.php'; ?>

                    <button class="button button--primary" type="button">
                        <span class="button__text">Обсудить проект</span>
                        <img src="img/icons/arrow-white.svg" alt="img">
                    </button>
                </div>
            </div>
        </div>
        <div class="header__row header__row--bottom">
            <div class="header__inner">
                <ul class="menu">
                    <li class="has-children">
                        <a href="#">Компания</a>
                        <ul class="submenu">
                            <li>
                                <a href="#">Компания</a>
                            </li>
                            <li>
                                <a href="#">Компания</a>
                            </li>
                            <li>
                                <a href="#">Компания</a> 
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Бутик резиденций</a>
                    </li>
                    <li>
                        <a href="#">Мы строили</a>
                    </li>
                    <li>
                        <a href="#">Архитектурное проектирование</a>
                    </li>
                    <li>
                        <a href="#">Дизайн интерьера</a>
                    </li>
                    <li>
                        <a href="#">Строительство под ключ</a>
                    </li>
                    <li>
                        <a href="#">Технадзор</a>
                    </li>
                    <li>
                        <a href="#">Инженерные сети</a>
                    </li>
                    <li class="has-children">
                        <a href="#">Партнерам</a>
                        <ul class="submenu">
                            <li>
                                <a href="#">Партнерам</a>
                            </li>
                            <li>
                                <a href="#">Партнерам</a>
                            </li>
                            <li>
                                <a href="#">Партнерам</a> 
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header__row header__row-caption">
            <div class="header__inner">
                <div class="caption">Дома первого класса / Architecture & Constructions</div>
            </div>
        </div>
    </header>