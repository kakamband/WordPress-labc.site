<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package labc-them2
 */

?>

<section class="navigation" id="navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="link_mb">
                    <h3 class="navigation__title">О компании</h3>
                    <ul class="navigation__text">
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Видение, миссия и ценности</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Преимущества</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Клиенты</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Партнеры</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="link_mb">
                    <h3 class="navigation__title">Пресс — центр</h3>
                    <ul class="navigation__text">
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Новости</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Публикации</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Мероприятия</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Консультация эксперта</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="link_mb">
                    <h3 class="navigation__title">Услуги</h3>
                    <ul class="navigation__text">
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Legal (Юридическое сопровождение)</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Accounting ( Финансовый аутсорсинг)</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Business Consulting (Бизнес консалтинг)</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <h3 class="navigation__title">Отрасли</h3>
                <ul class="navigation__text">
                    <li class="navigation__link">
                        <a href="#" class="navigation__link">Аграрный сектор</a>
                    </li>
                    <li class="navigation__link">
                        <a href="#" class="navigation__link">Внешнеэкономическая деятельность</a>
                    </li>
                    <li class="navigation__link">
                        <a href="#" class="navigation__link">ИT – бизнес</a>
                    </li>
                    <li class="navigation__link">
                        <a href="#" class="navigation__link">Оптовая и розничная торговля</a>
                    </li>
                    <li class="navigation__link">
                        <a href="#" class="navigation__link">Сфера услуг</a>
                    </li>
                    <li class="navigation__link">
                        <a href="#" class="navigation__link">Транспорт и Логистика</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="link_mt">
                    <h3 class="navigation__title">Образовательный портал</h3>
                    <ul class="navigation__text">
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Про Образовательный Центр</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Бизнес-тренинги, семинары, круглые столы</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Преимущества</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Alumni</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="link_mt">
                    <h3 class="navigation__title">Соц. предпринимательство</h3>
                    <ul class="navigation__text">
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Социальная миссия</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Проекты</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Партнеры</a>
                        </li>
                        <li class="navigation__link">
                            <a href="#" class="navigation__link">Консультация эксперта</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-12">
                    <a href="<?php bloginfo('url') ?>" class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/HOME-assets/logo-footer.png" alt="#"></a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="footer__text">
                        <p class="footer__question footer__question_mb">Вы хотите сотрудничать с нами ?<br> У Вас есть идеи или предложения ?<br> Свяжитесь с нами прямо сейчас !</p>
                        <p class="footer__address">65000,</p>
                        <p class="footer__address">Украина, г. Одесса</p>
                        <p class="footer__address footer__address_mb">Ул Базарная, 36</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-12">
                    <div class="contact">
                        <div class="contact__wrapper">
                            <div class="contact__w"><span>W</span></div>
                            <div class="contact__text">
                                <p class="contact__subtitle">Дизайн и разработка</p>
                                <p class="contact__title">коучинг по верстке</p>
                            </div>
                        </div>
                        <div class="contact__content">
                            <p class="contact__protection">© Все права защищены</p>
                            <p class="contact__exil">LAB Consulting</p>
                            <a href="mailto:lab-consult.com" class="contact__link">lab-consult.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-12 d-flex align-items-center ml-auto justify-content-center">
                    <button class="button footer__button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-phone"></i>Заказать звонок</button>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <h5 class="modal-title" id="exampleModalLabel">Заказать обратный звонок</h5>
                <p class="moda-subtitle">Заполните форму и мы свяжемся с вами как можно скорее. До скорой встречи</p>


                <?php echo do_shortcode('[contact-form-7 id="63" title="Контактная форма 1"]'); ?>


            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
    
</body>

</html>
