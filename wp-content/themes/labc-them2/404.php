<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package labc-them2
 */

get_header(); ?>


<section class="error">
    <div class="container">
        <div class="error-block">
            <span class="error-subtitle">Страница не найдена</span>
            <h1 class="error-title">Ошибка 404</h1>
            <a href="<?php bloginfo('url') ?>" class="error-btn">Домой<span></span></a>
        </div>
    </div>
</section>
                        


 
<?php get_footer(); ?>