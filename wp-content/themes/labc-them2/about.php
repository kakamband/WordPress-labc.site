<?php
    /*
        Template Name: about
    */
?>


<?php get_header(); ?>

<section class="about-header" id="about-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1 class="about-header__title">О компании</h1>
                        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
                </div>  
                <div class="col-lg-6 col-sm-10 m-auto">
                    <div class="services-menu">
                        <button type="button" data-tab="#tab_1" class="services-menu__info tabs__nav-btn">Видение</button>
                        <button type="button" data-tab="#tab_2" class="services-menu__info tabs__nav-btn active">Преимущества</button>
                        <button type="button" data-tab="#tab_3" class="services-menu__info tabs__nav-btn">Клиенты</button>
                        <button type="button" data-tab="#tab_4" class="services-menu__info tabs__nav-btn">Партнеры</button>
                        <a href="contacts/">Контакты</a>
                    </div>
                </div>
            </div>
        </div>
</section>
<div class="tabs__content">
        <div class="tabs__item active" id="tab_1">
            <section class="about-advantages" id="about-advantages">
            <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="about-advantages__title">Видение LAB Consult</h2>
                </div>
                <div class="col-lg-6">
                    <p class="about-advantages__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="col-lg-6">
                    <p class="about-advantages__text about-advantages__text_two">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat commodo consequat.
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="about-advantages__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="col-lg-6">
                    <p class="about-advantages__text about-advantages__text_two">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-12 np">
                <div class="list">
                    <div class="list__block">
                        <div class="list__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/Scale.png" class="list__icon" alt="#">
                        </div>
                        <div class="list__text">
                            <h3 class="list__title">Первое весомое видение</h3>
                            <p class="list__subtitle">
                            <?php the_field('the-first-significant-vision'); ?> </p>
                        </div>
                    </div>
                    <div class="list__block">
                        <div class="list__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/Scale.png" class="list__icon" alt="#">
                        </div>
                        <div class="list__text">
                            <h3 class="list__title">Второе сильное и мощное видение</h3>
                            <p class="list__subtitle">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                    <div class="list__block">
                        <div class="list__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/Scale.png" class="list__icon" alt="#">
                        </div>
                        <div class="list__text">
                            <h3 class="list__title">2.1 сильное и мощное видение</h3>
                            <p class="list__subtitle">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                    <div class="list__block list__block_border">
                        <div class="list__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/Scale.png" class="list__icon" alt="#">
                        </div>
                        <div class="list__text">
                            <h3 class="list__title">Третье и финальное сильное и мощное видение</h3>
                            <p class="list__subtitle">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </section>
            <section class="power" id="power">
            <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="power__title">Фото наших мощностей</h2>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-1-m.png" class="route-list" data-lightbox="image-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-1-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-2-m.png" class="route-list" data-lightbox="image-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-2-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-3-m.png" class="route-list" data-lightbox="image-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-3-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-4-m.png" class="route-list" data-lightbox="image-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-4-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
        </div>
        <div class="tabs__item" id="tab_2">
        <section class="about-advantages" id="about-advantages">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="about-advantages__title">Преимущества LAB Consult</h2>
                </div>
                <div class="col-lg-6">
                    <p class="about-advantages__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="col-lg-6">
                    <p class="about-advantages__text about-advantages__text_two">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-12 np">
                <div class="list">
                    <div class="list__block">
                        <div class="list__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/Scale.png" class="list__icon" alt="#">
                        </div>
                        <div class="list__text">
                            <h3 class="list__title">Первое весомое преимущество</h3>
                            <p class="list__subtitle">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                    <div class="list__block">
                        <div class="list__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/Scale.png" class="list__icon" alt="#">
                        </div>
                        <div class="list__text">
                            <h3 class="list__title">Второе сильное и мощное преимущество</h3>
                            <p class="list__subtitle">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                    <div class="list__block list__block_border">
                        <div class="list__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/Scale.png" class="list__icon" alt="#">
                        </div>
                        <div class="list__text">
                            <h3 class="list__title">Третье и финальное сильное и мощное преимущество</h3>
                            <p class="list__subtitle">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="power" id="power">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="power__title">Фото наших мощностей</h2>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-1-m.png" class="route-list" data-lightbox="image-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-1-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-2-m.png" class="route-list" data-lightbox="image-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-2-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-3-m.png" class="route-list" data-lightbox="image-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-3-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-4-m.png" class="route-list" data-lightbox="image-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-4-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
        </div>
        <div class="tabs__item" id="tab_3">
        <section class="about-advantages" id="about-advantages">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="about-advantages__title">Клиенты LAB Consult</h2>
                </div>
                <div class="col-lg-6">
                    <p class="about-advantages__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="col-lg-6">
                    <p class="about-advantages__text about-advantages__text_two">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-12 np">
                <div class="list">
                    <div class="list__block">
                        <div class="list__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/Scale.png" class="list__icon" alt="#">
                        </div>
                        <div class="list__text">
                            <h3 class="list__title">Первое весомое преимущество</h3>
                            <p class="list__subtitle">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                    <div class="list__block">
                        <div class="list__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/Scale.png" class="list__icon" alt="#">
                        </div>
                        <div class="list__text">
                            <h3 class="list__title">Второе сильное и мощное преимущество</h3>
                            <p class="list__subtitle">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                    <div class="list__block list__block_border">
                        <div class="list__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/Scale.png" class="list__icon" alt="#">
                        </div>
                        <div class="list__text">
                            <h3 class="list__title">Третье и финальное сильное и мощное преимущество</h3>
                            <p class="list__subtitle">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="power" id="power">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="power__title">Фото наших мощностей</h2>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-1-m.png" class="route-list" data-lightbox="image-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-1-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-2-m.png" class="route-list" data-lightbox="image-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-2-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-3-m.png" class="route-list" data-lightbox="image-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-3-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-4-m.png" class="route-list" data-lightbox="image-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-4-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
        </div>
        <div class="tabs__item" id="tab_4">
        <section class="about-advantages" id="about-advantages">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="about-advantages__title">Партнеры LAB Consult</h2>
                </div>
                <div class="col-lg-6">
                    <p class="about-advantages__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="col-lg-6">
                    <p class="about-advantages__text about-advantages__text_two">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-12 np">
                <div class="list">
                    <div class="list__block">
                        <div class="list__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/Scale.png" class="list__icon" alt="#">
                        </div>
                        <div class="list__text">
                            <h3 class="list__title">Первое весомое преимущество</h3>
                            <p class="list__subtitle">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                    <div class="list__block">
                        <div class="list__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/Scale.png" class="list__icon" alt="#">
                        </div>
                        <div class="list__text">
                            <h3 class="list__title">Второе сильное и мощное преимущество</h3>
                            <p class="list__subtitle">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                    <div class="list__block list__block_border">
                        <div class="list__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/Scale.png" class="list__icon" alt="#">
                        </div>
                        <div class="list__text">
                            <h3 class="list__title">Третье и финальное сильное и мощное преимущество</h3>
                            <p class="list__subtitle">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="power" id="power">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="power__title">Фото наших мощностей</h2>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-1-m.png" class="route-list" data-lightbox="image-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-1-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-2-m.png" class="route-list" data-lightbox="image-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-2-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-3-m.png" class="route-list" data-lightbox="image-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-3-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-12 col-md-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-4-m.png" class="route-list" data-lightbox="image-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ABOUT-assets/truck-4-m.png" alt="#" class="route-list__img">
                        <div class="route-list__overlay">
                            <div class="route-list__text">
                                <i class="fa fa-expand-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    </div>

<?php get_footer(); ?>