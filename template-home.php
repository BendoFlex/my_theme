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
    <div class="lab-blog">
        <div class="container">
            <?php
                if (have_posts()):

                    while (have_posts()) : the_post(); 
                    ?>
                        <p><?=the_title();?></p>
                        <p><?=the_content();?></p>
                    <?php 
                    endwhile;
                else: 
            ?> 
                    <p>Nothing to display write an article</p>
            <?php endif;?>
        </div>
    </div>
</div>