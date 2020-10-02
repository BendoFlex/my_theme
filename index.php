<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/fancy
 *
 * @package WordPress
 * @subpackage My_Theme
 * @since My_Theme 1.0
 */

get_header();
?>

<div class="content-area">
    <div class="slider">Slider</div>
    <div class="popular-products">Popular Products</div>
    <div class="new-arrivals">New Arrivals</div>
    <div class="deal-of-the-week">Deal of the week</div>
    <div class="lab-blog">News</div>
</div>
   
<?php get_footer(); 