<?php
    /*
        Template Name: contact
    */
?>

    <?php get_header(); ?>
    <section class="about-header contacts-header" id="about-header contacts-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    <h1 class="about-header__title">Контакты</h1>
                    <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
                </div>
                <div class="col-lg-6 col-sm-12 ml-auto d-flex align-items-center justify-content-center">
                    <div class="services-menu">
                        <button type="button" data-tab="#tab_1" class="services-menu__info tabs__nav-btn active">Офис в Одессе</button>
                        <button type="button" data-tab="#tab_2" class="services-menu__info tabs__nav-btn">Офис в Киеве</button>
                        <button type="button" data-tab="#tab_3" class="services-menu__info tabs__nav-btn">Офис в Харькове</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tabs__content">
        <div class="tabs__item active" id="tab_1">
            <section class="map">
                <div class="container-fluid container-fluid_plain">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A52bf1c63c32985791a46849f41c73da0083ede531e24cf28ef3ad62c33a6eb6f&amp;width=100%25&amp;height=440&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                        <div class="col-12 position d-flex justify-content-lg-end">
                            <div class="map__card">
                                <div class="map__hero">
                                    <h3 class="map__title">LAB Consulting</h3>
                                    <div class="map__social">
                                        <a href="#">
                                            <div class="map__link map__link_face">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="map__link map__link_tw">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="map__link map__link_tlg">
                                                <i class="fab fa-telegram-plane"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="map__line"></div>
                                <div class="map__contant">
                                    <div class="map__links">
                                        <a href="tel:+70487562354" class="map__contacts-link"><i class="fa fa-phone-alt"></i>+7 (048)756-23-54</a>
                                        <a href="tel:+70487562354" class="map__contacts-link map__contacts-link_tel"><i
                                   class="fa fa-phone-alt"></i>+7
                                (048)756-23-54</a>
                                        <p class="map__adress"><i class="fa fa-location-arrow"></i>65000, <br> Украина, г. Одесса <br> Ул Базарная, 36
                                        </p>
                                        <a href="mailto:info@lab-consult.com" class="map__contacts-link map__contacts-link_mail"><i
                                   class="fa fa-envelope"></i>info@lab-consult.com</a>
                                    </div>
                                    <div class="map__text">
                                        <p class="map__info map__info_one">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <p class="map__info">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tabs__item" id="tab_2">
            <section class="map">
                <div class="container-fluid container-fluid_plain">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3491dec4d80648cca7931b692969fc3f8926b79bae670db15f2c4cbcd76efe10&amp;width=100%25&amp;height=440&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                        <div class="col-12 position d-flex justify-content-lg-end">
                            <div class="map__card">
                                <div class="map__hero">
                                    <h3 class="map__title">LAB Consulting</h3>
                                    <div class="map__social">
                                        <a href="#">
                                            <div class="map__link map__link_face">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="map__link map__link_tw">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="map__link map__link_tlg">
                                                <i class="fab fa-telegram-plane"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="map__line"></div>
                                <div class="map__contant">
                                    <div class="map__links">
                                        <a href="tel:+70487562354" class="map__contacts-link"><i class="fa fa-phone-alt"></i>+7 (048)756-23-54</a>
                                        <a href="tel:+70487562354" class="map__contacts-link map__contacts-link_tel"><i
                                   class="fa fa-phone-alt"></i>+7
                                (048)756-23-54</a>
                                        <p class="map__adress"><i class="fa fa-location-arrow"></i>68457, <br> Украина, г. Киев <br> Ул Пушкинская, 12
                                        </p>
                                        <a href="mailto:info@lab-consult.com" class="map__contacts-link map__contacts-link_mail"><i
                                   class="fa fa-envelope"></i>info@lab-consult.com</a>
                                    </div>
                                    <div class="map__text">
                                        <p class="map__info map__info_one">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <p class="map__info">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tabs__item" id="tab_3">
            <section class="map">
                <div class="container-fluid container-fluid_plain">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac08bc821be00c90856de1bc4464f38326eeb2fb1a912cfde30041b5ea91f4466&amp;width=100%25&amp;height=440&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                        <div class="col-12 position d-flex justify-content-lg-end">
                            <div class="map__card">
                                <div class="map__hero">
                                    <h3 class="map__title">LAB Consulting</h3>
                                    <div class="map__social">
                                        <a href="#">
                                            <div class="map__link map__link_face">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="map__link map__link_tw">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="map__link map__link_tlg">
                                                <i class="fab fa-telegram-plane"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="map__line"></div>
                                <div class="map__contant">
                                    <div class="map__links">
                                        <a href="tel:+70487562354" class="map__contacts-link"><i class="fa fa-phone-alt"></i>+7 (048)756-23-54</a>
                                        <a href="tel:+70487562354" class="map__contacts-link map__contacts-link_tel"><i
                                   class="fa fa-phone-alt"></i>+7
                                (048)756-23-54</a>
                                        <p class="map__adress"><i class="fa fa-location-arrow"></i>96745, <br> Украина, г. Харьков <br> Неизвестно, 404
                                        </p>
                                        <a href="mailto:info@lab-consult.com" class="map__contacts-link map__contacts-link_mail"><i
                                   class="fa fa-envelope"></i>info@lab-consult.com</a>
                                    </div>
                                    <div class="map__text">
                                        <p class="map__info map__info_one">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <p class="map__info">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php get_footer(); ?>