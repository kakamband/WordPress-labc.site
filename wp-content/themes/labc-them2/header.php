<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package labc-them2
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--meta seo-->
    <meta name="description" content="Lab Consulting - Ваш надежный партнер в области транспортно-логистического сопровождения">
    <meta name="keywords" content="Транспортно-логистическое сопровождение">
    <meta name="robots" content="Транспортно-логистическое сопровождение">

    <meta name="Author" content="Родион Рамазанов">
    <meta name="Copyright" content="Родион Рамазанов">
    <meta name="Address" content="LA">

        <!-- локализация сайта, для русскоязычного сайта ru_RU -->
        <meta property="og:locale" content="ru_RU">
    <!-- тип контента, по умолчанию используется article -->
    <meta property="og:type" content="article">
    <!-- заголовок страницы, который будет выводится в записи социальной сети -->
    <meta property="og:title" content="Lab Consulting - Ваш надежный партнер в области транспортно-логистического сопровождения">
    <!-- описание страницы -->
    <meta property="og:description" content="Lab Consulting - Ваш надежный партнер в области транспортно-логистического сопровождения">
    <!-- название сайта -->
    <meta property="og:site_name" content="Lab Consulting">


    <!-- Тип карты, по умолчанию используется summary -->
    <meta name="twitter:card" content="summary">
    <!-- Имя/логин автора -->
    <meta name="twitter:site" content="Lab Consulting">
    <!-- Название страницы -->
    <meta name="twitter:title" content="Lab Consulting - Ваш надежный партнер в области транспортно-логистического сопровождения">
    <!-- Описание страницы -->
    <meta name="twitter:description" content="Lab Consulting - Ваш надежный партнер в области транспортно-логистического сопровождения">




 
    <?php wp_head(); ?>


</head>

<body>
    <div id="page-preloader">
        <div class="cssload-wrap">
            <div class="cssload-container">
                <span class="cssload-dots"></span>
                <span class="cssload-dots"></span>
                <span class="cssload-dots"></span>
                <span class="cssload-dots"></span>
                <span class="cssload-dots"></span>
                <span class="cssload-dots"></span>
                <span class="cssload-dots"></span>
                <span class="cssload-dots"></span>
                <span class="cssload-dots"></span>
                <span class="cssload-dots"></span>
            </div>
        </div>
    </div>
    <div class="shadow"></div>
    <header>
        <div class="header__hat">
            <div class="container">
                <div class="row flex-nowrap d-flex justify-content-between">
                    <div class="col-lg-4 col-6">
                        <a href="<?php bloginfo('url') ?>"><img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/HOME-assets/logo.png" alt="Lab Consulting"></a>
                    </div>
                    <div class="col-lg-6 menu-body">

                        <?php wp_nav_menu(array(
                            'theme_location'  => 'top-menu',
                            'container'       => 'nav', 
                            'container_class' => 'header__menu', 
                            'menu_class'      => 'header__list menu'
                        )); ?>

                    </div>
                    <div class="col-5 d-none d-sm-flex col-lg-2 col-sm-3 justify-content-end ml-auto">
                        <button class="button header__button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-phone"></i>Заказать звонок</button>
                    </div>
                    <div class="col-3 col-sm-1 d-lg-none d-flex justify-content-center">
                        <button class="menu__icon icon-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

