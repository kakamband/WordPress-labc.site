<?php
    /*
        Template Name: services
    */
?>

    <?php get_header(); ?>

    <section class="services-header" id="services-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-12">
                    <h1 class="about-header__title">Услуги</h1>
                    <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
                </div>
                <div class="col-lg-9 col-12  d-flex ml-lg-auto justify-content-lg-end justify-content-center">
                    <div class="services-menu">
                        <button type="button" data-tab="#tab_1" class="services-menu__info tabs__nav-btn active"><span class="services-menu__link">Legal</span>Юридическое сопровождение</button>
                        <button type="button" data-tab="#tab_2" class="services-menu__info tabs__nav-btn"><span class="services-menu__link">Accounting</span>Финансовый аутсорсинг</button>
                        <button type="button" data-tab="#tab_3" class="services-menu__info tabs__nav-btn"><span class="services-menu__link">Business Consulting</span>Бизнес консалтинг</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="tabs__content">
        <div class="tabs__item active" id="tab_1">
            <section class="escort" id="escort">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/SERVICES-assets/notebook.png" alt="#" class="escort__icon">
                        </div>
                        <div class="col-lg-4 col-md-8 col-12 d-flex flex-column justify-content-center">
                            <h2 class="escort__title">Юридическое сопровождение</h2>
                            <p class="escort__subtitle">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                        <div class="col-lg-4 ml-auto">
                            <div class="escort__card">
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Подкатегория услуг первая</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Вторая подкатегория</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Маленькая услуга</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Довольно длинная и замысловатая</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Еще одна</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>И еще одна в конце</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="subcategory" id="subcategory">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2 class="subcategory__title">Вторая подкатегория</h2>
                            <p class="subcategory__text">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,
                                the master-builder of human happiness.</p>
                            <p class="subcategory__text">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying
                                consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                            <p class="subcategory__text">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying
                                consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                            <p class="subcategory__text">Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <p class="subcategory__text">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying
                                consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                            <p class="subcategory__text">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who
                                loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                            <div class="card-subc">
                                <h3 class="card-subc__title">Нужна бесплатная консультация ?</h3>
                                <div class="card-subc__wrapper">
                                    <button class="button card-subc__button" data-toggle="modal" data-target="#exampleModal">Оставить заявку</button>
                                    <a href="tel:+380487562356" class="card-subc__tel">+38 (048) 756-23-56</a>
                                </div>
                                <p class="card-subc__text">
                                    Наши консультанты свяжутся с Вами максимально быстро и ответят на все интересующие Вас вопросы
                                </p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/SERVICES-assets/Conference.png" alt="#" class="card-subc__icon">
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 subcategory__bg">
                            <div class="nav">
                                <h3 class="nav__title">Навигация</h3>
                                <ul class="nav__item nav__item_first">
                                    <li>
                                        <a class="nav__link" href="#"><span class="nav__indicator"></span>Подпункт номер один</a>
                                    </li>
                                </ul>
                                <ul class="nav__item nav__item_two">
                                    <li>
                                        <a class="nav__link" href="#"><span class="nav__indicator"></span>Второй подпункт</a>
                                    </li>
                                </ul>
                                <ul class="nav__item nav__item_three">
                                    <li>
                                        <a class="nav__link" href="#"><span class="nav__indicator"></span>Третья подкатегория с длинным названием</a>
                                    </li>
                                </ul>
                                <ul class="nav__item nav__item_four">
                                    <li>
                                        <a class="nav__link" href="#"><span class="nav__indicator"></span>Категория номер четыре</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="reviews">
                                <h3 class="reviews__title">Отзывы</h3>
                                <div class="big-slider">
                                    <?php 
                               // параметры по умолчанию
                               $posts = get_posts( array(
                                  'numberposts' => 3,
                                  'post_type'   => 'reviews',
                                  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                               ) );
    
                               foreach( $posts as $post ){
                                  setup_postdata($post);
                                  ?>

                                    <div class="big-slider__item">
                                        <?php the_post_thumbnail(); ?>
                                        <h3 class="big-slider__title">
                                            <?php the_title(); ?>
                                        </h3>
                                        <div class="big-slider__subtitle">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                    </div>

                                    <?php
                               }
    
                               wp_reset_postdata(); // сброс
                            ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tabs__item" id="tab_2">
            <section class="escort" id="escort">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/SERVICES-assets/notebook.png" alt="#" class="escort__icon">
                        </div>
                        <div class="col-lg-4 col-md-8 col-12 d-flex flex-column justify-content-center">
                            <h2 class="escort__title">Финансовый аутсорсинг</h2>
                            <p class="escort__subtitle">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                        <div class="col-lg-4 ml-auto">
                            <div class="escort__card">
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Подкатегория услуг первая</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Вторая подкатегория</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Маленькая услуга</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Довольно длинная и замысловатая</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Еще одна</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>И еще одна в конце</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="subcategory" id="subcategory">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2 class="subcategory__title">Маленькая услуга</h2>
                            <p class="subcategory__text">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,
                                the master-builder of human happiness.</p>
                            <p class="subcategory__text">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying
                                consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                            <p class="subcategory__text">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying
                                consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                            <p class="subcategory__text">Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <p class="subcategory__text">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying
                                consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                            <p class="subcategory__text">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who
                                loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                            <div class="card-subc">
                                <h3 class="card-subc__title">Нужна бесплатная консультация ?</h3>
                                <div class="card-subc__wrapper">
                                    <button class="button card-subc__button" data-toggle="modal" data-target="#exampleModal">Оставить заявку</button>
                                    <a href="tel:+380487562356" class="card-subc__tel">+38 (048) 756-23-56</a>
                                </div>
                                <p class="card-subc__text">
                                    Наши консультанты свяжутся с Вами максимально быстро и ответят на все интересующие Вас вопросы
                                </p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/SERVICES-assets/Conference.png" alt="#" class="card-subc__icon">
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 subcategory__bg">
                            <div class="nav">
                                <h3 class="nav__title">Навигация</h3>
                                <ul class="nav__item nav__item_first">
                                    <li>
                                        <a class="nav__link" href="#"><span class="nav__indicator"></span>Подпункт номер один</a>
                                    </li>
                                </ul>
                                <ul class="nav__item nav__item_two">
                                    <li>
                                        <a class="nav__link" href="#"><span class="nav__indicator"></span>Второй подпункт</a>
                                    </li>
                                </ul>
                                <ul class="nav__item nav__item_three">
                                    <li>
                                        <a class="nav__link" href="#"><span class="nav__indicator"></span>Третья подкатегория с длинным названием</a>
                                    </li>
                                </ul>
                                <ul class="nav__item nav__item_four">
                                    <li>
                                        <a class="nav__link" href="#"><span class="nav__indicator"></span>Категория номер четыре</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="secondary" class="four columns end">
                                <?php get_sidebar(); ?>
                            </div>
                            <!-- Secondary End-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tabs__item" id="tab_3">
            <section class="escort" id="escort">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/SERVICES-assets/notebook.png" alt="#" class="escort__icon">
                        </div>
                        <div class="col-lg-4 col-md-8 col-12 d-flex flex-column justify-content-center">
                            <h2 class="escort__title">Бизнес консалтинг</h2>
                            <p class="escort__subtitle">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                        <div class="col-lg-4 ml-auto">
                            <div class="escort__card">
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Подкатегория услуг первая</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Вторая подкатегория</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Маленькая услуга</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Довольно длинная и замысловатая</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>Еще одна</a>
                                <a href="#" class="escort__link"><i class="fa fa-long-arrow-alt-right"></i>И еще одна в конце</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="subcategory" id="subcategory">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2 class="subcategory__title">И еще одна в конце</h2>
                            <p class="subcategory__text">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,
                                the master-builder of human happiness.</p>
                            <p class="subcategory__text">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying
                                consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                            <p class="subcategory__text">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying
                                consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                            <p class="subcategory__text">Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <p class="subcategory__text">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying
                                consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                            <p class="subcategory__text">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who
                                loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                            <div class="card-subc">
                                <h3 class="card-subc__title">Нужна бесплатная консультация ?</h3>
                                <div class="card-subc__wrapper">
                                    <button class="button card-subc__button" data-toggle="modal" data-target="#exampleModal">Оставить заявку</button>
                                    <a href="tel:+380487562356" class="card-subc__tel">+38 (048) 756-23-56</a>
                                </div>
                                <p class="card-subc__text">
                                    Наши консультанты свяжутся с Вами максимально быстро и ответят на все интересующие Вас вопросы
                                </p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/SERVICES-assets/Conference.png" alt="#" class="card-subc__icon">
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 subcategory__bg">
                            <div class="nav">
                                <h3 class="nav__title">Навигация</h3>
                                <ul class="nav__item nav__item_first">
                                    <li>
                                        <a class="nav__link" href="#"><span class="nav__indicator"></span>Подпункт номер один</a>
                                    </li>
                                </ul>
                                <ul class="nav__item nav__item_two">
                                    <li>
                                        <a class="nav__link" href="#"><span class="nav__indicator"></span>Второй подпункт</a>
                                    </li>
                                </ul>
                                <ul class="nav__item nav__item_three">
                                    <li>
                                        <a class="nav__link" href="#"><span class="nav__indicator"></span>Третья подкатегория с длинным названием</a>
                                    </li>
                                </ul>
                                <ul class="nav__item nav__item_four">
                                    <li>
                                        <a class="nav__link" href="#"><span class="nav__indicator"></span>Категория номер четыре</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="reviews">
                                <h3 class="reviews__title">Отзывы</h3>
                                <div class="big-slider">
                                    <?php 
                            // параметры по умолчанию
                            $posts = get_posts( array(
                               'numberposts' => 3,
                               'post_type'   => 'reviews',
                               'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );
 
                            foreach( $posts as $post ){
                               setup_postdata($post);
                               ?>

                                    <div class="big-slider__item">
                                        <?php the_post_thumbnail(); ?>
                                        <h3 class="big-slider__title">
                                            <?php the_title(); ?>
                                        </h3>
                                        <div class="big-slider__subtitle">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                    </div>

                                    <?php
                            }
 
                            wp_reset_postdata(); // сброс
                         ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



    <?php get_footer(); ?>