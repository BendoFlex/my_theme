<?php 
    global $page_slug;
    $page_slug = trim( $_SERVER["REQUEST_URI"] , '/' );
    $my_slug = $post->post_name;
 ?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset');?> ">
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        
        <?php wp_head(); // ce hook permet de charger les script?> 
        
    </head>

    <body <?php body_class(); ?>>
        <header>
            <div class="search_bar">
                <div class="container">
                    <input type="text">
                    <button>Search</button>
                </div> 
            </div>

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="brand col-3 col-sm-3">
                            <div class="logoContainer"><img src="https://via.placeholder.com/80" alt="logo"></div>
                        </div>
                        <div class="second_column col-9 col-sm-9">
                            <div class="account">Account</div>
                            <div class="main-menu">
                                <?php
                                wp_nav_menu(
                                    array(
                                        "theme_location"=> "my_theme_main_menu",
                                    )
                                );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>