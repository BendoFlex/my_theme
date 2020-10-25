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
                    <div class="text-center d-md-flex text-align-center">
                        <?php get_search_form();?>
                    </div>
                </div> 
            </div>

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="brand col-md-3 col-lg-2">
                            <div class="logoContainer"><img src="https://via.placeholder.com/80" alt="logo">
                                <a href="<?php home_url( '/');?>">
                                        <?php if( has_custom_logo()):?>
                                            <?php the_custom_logo();?>
                                        <?php else : ?>
                                            <p class="site-title"><?php bloginfo( 'title');?></p>
                                            <span class="site-desc"><?php bloginfo( 'description');?></span>
                                        <?php endif;?>
                                </a>  
                            </div>
                        </div>
                        <div class="second_column col-md-9 col-lg-10">
                            <div class="row">
                                <div class="account col-12">
                                    <div class="row">
                                        <?php if(class_exists("Woocommerce")) :?>
                                        <div class="account col-12">
                                            <div class="navbar-expand">
                                                <ul class="navbar-nav float-left">
                                                    <?php if (is_user_logged_in()) :?>
                                            
                                                     <li>
                                                        <a class="nav-link" href="<?=esc_url(get_permalink( get_option( 'woocommerce_myaccount_page_id') ) );?>">My account</a>
                                                    </li>
                                                    <li>
                                                        <a  class="nav-link" href="<?= esc_url ( wp_logout_url( get_permalink( get_option( 'woocommerce_myaccount_page_id') ) ) );?>">Logout</a>
                                                    </li>
                                                    <?php else :?>
                                                    <li>
                                                        <a  class="nav-link" href="<?php echo esc_url(get_permalink( get_option( 'woocommerce_myaccount_page_id') ) );?>">Login/Register</a>
                                                    </li>
                                                    <?php endif;?>
                                                </ul>
                                            </div>
                                            <div class="cart text-right">
                                                <a href="<?php echo wc_get_cart_url();?>"><span class="cart-icon">Cart</span></a>
                                                <span class="items"> <?= WC()->cart->get_cart_contents_count();?></span>
                                            </div>
                                        </div>
                                        <?php endif ;?>
                                    </div>
                                </div>
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