Bootstrap needs a js an css file, a downloaded the simple distribution
wp_enqueue_script ('name','path',dependencies, ver, true) // load before body tag in wp_footer
bootstrap col-sm-x is for all device col-x for small deevice

0210 
News : 
functions.php uses hooks to modify pages without modify pages directly 
The pages are located in /woocommerce/ these files replace native woocommerce 

Also I implemented modularity: 
 with a require in functions.php => then the code is wrapped in a function => and is trigered in "wp" hook

 The process is to modify all the pages of our theme : 
 By now : Single Product / Shop /Checkout / Cart are being modified


 Google Fonts
 https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script


 Boostrap visualization in Menu

 .container
    .row
        col-md-3 col-lg-2
        col-md-9 col-lg-10                // dispatch space
            .row //nested
                col-12
                col-12

ml-auto: align in inverted point.
What is that? 
 <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
</button>
data-toogle/data-target
is this a js target?
 