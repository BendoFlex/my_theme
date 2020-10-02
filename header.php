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
                        <div class="brand col-md-3 col-lg-2">
                            <div class="logoContainer"><img src="https://via.placeholder.com/80" alt="logo"></div>
                        </div>
                        <div class="second_column col-md-9 col-lg-10">
                            <div class="row">
                                <div class="account col-12">Account</div>
                                <div class="col-12">
                                    <nav class="main-menu navbar navbar-expand-md navbar-light" role="navigation">
                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                                <?php
                                                wp_nav_menu( array(
                                                    'theme_location'    => 'my_theme_main_menu',
                                                    'depth'             => 3,
                                                    'container'         => 'div',
                                                    'container_class'   => 'collapse navbar-collapse',
                                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                                    'menu_class'        => 'nav navbar-nav',
                                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                                ) );
                                                ?>
                                        </div>
                                    </nav>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </header>