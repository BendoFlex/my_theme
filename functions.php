<?php
//STEPS : STYLING OK / MENU / WP _SUPPORT / LOOP 

require get_template_directory() . '/inc/customizer.php';
/**
 * Register Custom Navigation Walker
 */
add_action('after_setup_theme','register_navwalker'); // studying how this component bootstrap is worked and class

function register_navwalker(){ 

    if( file_exists(get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php') ){ 
        require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
    }
    else{
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    }
    
}




add_action('wp_enqueue_scripts', 'my_theme_scripts');

function my_theme_scripts() {

    wp_enqueue_style(
        'bootstrap-css',
        get_template_directory_uri() . '/inc/css/bootstrap.min.css',// diff between get_template_directory_uri /  get_template_directory
        array(),
        '4.5.2',
        'all'
    );

    //googleFont 

    wp_enqueue_style(
        'customs-google-font',
        'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script',
        false
    );

    wp_enqueue_style( 
        'my_theme_style',
        get_stylesheet_uri(), 
        array(), 
        filemtime(get_template_directory() .'/style.css') //path not a url
    );

     // Déclarer jQuery
     wp_enqueue_script( 
        'jquery', 
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
        false, 
        '3.3.1', 
        true 
    );

    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . '/inc/js/bootstrap.min.js',
        array('jquery'),
        true
    );

    wp_enqueue_script(
         'my_theme_script',
          get_template_directory_uri() . '/inc/js/index.js',
          array(), //this could load jquery
          '1.0.0',
          true // this boolean makes the script charge in wp_footer()
    ); // make sure you set up this in your pages
}


//cool fact wp_footer loads admin bar


function my_theme_config(){
    register_nav_menus(
        array(
            'my_theme_main_menu' => 'My Theme Main Menu',
            'my_theme_footer_menu' => 'My Theme Footer Menu',
        )
    );

    add_theme_support('woocommerce', array (
            'thumbnail_image_width' => 255,
            'single_image_width'    => 255,
            'product_grid'          => array(
                'default_rows'    => 10,
                'min_rows'        => 5,
                'max_rows'        => 10,
                'default_columns' => 1,
                'max_columns'     => 1,
                'min_columns'     => 1,  
            )
        )
    );

    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }

    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-slider');
  
    add_theme_support( 'post-thumbnails' );   // Ajouter la prise en charge des images mises en avant
    add_theme_support( 'title-tag' ); //Ajouter automatiquement le titre du site dans l'en-tête du site



    add_theme_support('custom-logo', array(
        'width'         =>   85,
        'height'        =>   160,
        'flex-height'   =>   true,
        "flex-width"    =>   true
    ));




}

add_action("after_setup_theme", 'my_theme_config', 0);

if(class_exists("WooCommerce")){//prevent shutdownif woocommerce is not installed
    require get_template_directory() . '/inc/page-modifications.php'; // modularity
}




/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'my_theme_header_add_to_cart_fragment' );

function my_theme_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
    <span class="items"> <?= WC()->cart->get_cart_contents_count();?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}