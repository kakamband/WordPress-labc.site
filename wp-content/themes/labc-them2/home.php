<?php
    /*
        Template Name: home
    */
?>

<?php get_header(); ?>
<div class="fixed-crossbrowser-background"></div>
<section class="header" id="header" data-type="background" data-speed="2">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-lg-6 col-12">
                    <h1 class="header__title">LAB Consulting</h1>
                    <p class="header__subtitle">Ваш надежный партнер в области транспортно-логистического сопровождения</p>
                    <div class="social">
                        <a href="#" class="social__link social__link_face">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="#" class="social__link social__link_tw">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social__link social__link_tlg">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trust" id="trust">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="trust__title">Мы заслужили доверие</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="trust__mb">
                        <div class="trust__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/HOME-assets/icon-1.png" alt="#" class="trust__icon">
                        </div>
                        <h3 class="trust__subtitle">Что мы предлагаем ?</h3>
                        <p class="trust__text trust__text_one">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="trust__center">
                        <div class="trust__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/HOME-assets/icon-2.png" alt="#" class="trust__icon">
                        </div>
                        <h3 class="trust__subtitle">Как мы работаем ?</h3>
                        <p class="trust__text"> <?php the_field('we-are-working'); ?>
                            </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 ml-auto mr-auto">
                    <div class="trust__mt">
                        <div class="trust__ellipse">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/HOME-assets/icon-3.png" alt="#" class="trust__icon">
                        </div>
                        <h3 class="trust__subtitle">Почему мы ?</h3>
                        <p class="trust__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex ml-auto mr-auto justify-content-center">
                    <a href="#missions" class="button trust__button go">Подробнее</a>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages" id="advantages">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="advantages__wrapper">
                        <div class="advantages__ellipse">
                            <p class="advantages__icon">l</p>
                        </div>
                        <h3 class="advantages__subtitle"><span>l</span>egal</h3>
                        <p class="advantages__text">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="trust__mt">
                        <div class="advantages__ellipse">
                            <p class="advantages__icon">a</p>
                        </div>
                        <h3 class="advantages__subtitle"><span>a</span>ccounting</h3>
                        <p class="advantages__text">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="trust__mt">
                        <div class="advantages__ellipse">
                            <p class="advantages__icon">b</p>
                        </div>
                        <h3 class="advantages__subtitle"><span>b</span>usiness</h3>
                        <p class="advantages__text">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="missions" id="missions">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9">
                    <div class="missions__hero">
                        <h2 class="missions__title">Миссия LAB Consulting</h2>
                        <div class="missions__line"></div>
                    </div>
                    <div class="missions__wrapper">
                        <div class="missions__text">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                            <p>Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                voluptatem.
                            </p>
                          
                       
                        
                            <p>Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                voluptatem.
                            </p>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                            </p>
                        
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</p>
                            <p>Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                voluptatem.
                            </p>
                        
                        
                            <p>Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                voluptatem.
                            </p>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                            </p>
                            <button class="button missions__button" data-toggle="modal" data-target="#exampleModal">Узнать больше</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="missions__news">
                        <h2 class="missions__title">Новости</h2>
                        <div class="missions__line"></div>
                    </div>
                    <div class="tech">

                    <?php 
                    $args = array(
                        'posts_per_page' => 5,
                        'orderby' => 'comment_count'
                    );

                    $query = new WP_Query( $args );

                    if($query -> have_posts() ){
                        while ($query -> have_posts()) {
                            $query->the_post(); ?>
                                 <article class="tech__block">
                                    <div class="tech__icon">
                                       <a href="<?php get_permalink(); ?>"><?php the_post_thumbnail('thumbnails') ?></a> 
                                    </div>
                                    <div class="tech__text">
                                        <h3 class="tech__title"><a href="<?php get_permalink(); ?>"><?php the_title(); ?></a></h3>

                                        <p class="tech__content"><?php the_excerpt(); ?></p>

                                        <data class="tech__subtitle"><?php the_date(); ?></data>
                                            <?php the_tags('', ' / ') ?>
                                    </div>
                            
                                </article>
                      <?php  }
                    } else {
                        // постов не найдено
                    }
                    wp_reset_postdata();
                    ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info">
        <h2 class="trust__title">Секция с примером возможностей WordPress</h2>
    <div class="container">
        <div class="content-outer">
            <div id="page-content" class="row">
                <div id="info-posts">
                <h2>Все посты</h2>
                    <?php 
                    // параметры по умолчанию
                    $posts = get_posts( array(
	                    'numberposts' => 0,
	                    'post_type'   => 'post',
	                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

    foreach( $posts as $post ){
	    setup_postdata($post);
        ?> 
        <div class="block-post">
            <h3><?php the_title(); ?></h3>
            <data class="tech__subtitle"><?php the_date(); ?></data>
            <span>By <?php the_author(); ?></span>
            <p> <?php the_content(); ?></p>
            <div class="tech__icon">
                 <?php the_post_thumbnail('thumbnails'); ?>
             </div>
             <?php the_tags('', ' / ') ?>
        </div>
        <?php 
    }

    wp_reset_postdata(); // сброс 
    ?>

                </div>
                <div id="secondary" class="four columns end">
                    <?php get_sidebar(); ?>
                </div> <!-- Secondary End-->
                <?php get_search_form(); ?>
            </div>
        </div> <!-- Content End-->
    </div>
</section> 


<?php get_footer(); ?>