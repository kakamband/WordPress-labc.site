<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package labc-them2
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside id="sidebar">

<?php dynamic_sidebar('sidebar'); ?>

</aside>
