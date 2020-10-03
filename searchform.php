<?php
/**
 * Template for displaying search forms in My Theme
 *
 * @package WordPress
 * @subpackage My_Theme
 * @since My_Theme 1.0
 * @version 1.0
 */

?>


<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

    <input type="search"  class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentyseventeen' ); ?>" 
    value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentyseventeen' ); ?></span></button>
    <?php $post_type = class_exists("WooCommerce") ?  "product" : "post"?>
    <input type="hidden" value="<?=$post_type?>" name="post_type" id="post_type"/>
</form>
