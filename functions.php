<?php
//STEPS : STYLING OK / MENU / WP _SUPPORT / LOOP 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


add_action('wp_enqueue_scripts', 'my_theme_scripts');

function my_theme_scripts() {

    wp_enqueue_style(
        'bootstrap-css',
        get_template_directory_uri() . '/public/css/bootstrap.min.css',// diff between get_template_directory_uri /  get_template_directory
        array(),
        '4.5.2',
        'all'
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
        get_template_directory_uri() . '/public/js/bootstrap.min.js',
        array('jquery'),
        true
    );

    wp_enqueue_script(
         'my_theme_script',
          get_template_directory_uri() . '/public/js/index.js',
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
}

add_action("after_setup_theme", 'my_theme_config', 0);