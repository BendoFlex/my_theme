<?php


function my_theme_wc_modif()//SET THE MAIN WRAPPER : set worked ! chicken wings !
{
        add_action("woocommerce_before_main_content",'open_my_theme_container',5); // mettre la priorité a 5, l'éxécute en priorité
        //first wrapper opening
        function open_my_theme_container () {
            echo '<div class="container"> <div class="row">' ; 
        }

        // and close the main  wrapper
        add_action("woocommerce_after_main_content",'close_my_theme_container');

        function close_my_theme_container () {
            echo '</div> </div>';
        }
     
        //remove sidebar in former location
        remove_action("woocommerce_sidebar","woocommerce_get_sidebar");

        if(is_shop()){
                    //and open sidebar wrapper inside main wrapper
                add_action("woocommerce_before_main_content","open_sidebar_tags",6);

                function open_sidebar_tags () {
                    echo '<div id="sidebar" class="col-lg-3 col-7 ">';
                }
                

                //generate sidebar in the right place
                add_action("woocommerce_before_main_content","woocommerce_get_sidebar",7);

                //close sidebar
                add_action("woocommerce_before_main_content","close_sidebar_tags",8);

                function close_sidebar_tags () {
                    echo '</div>';
                }
                // add excerpt : filter
                add_action("woocommerce_after_shop_loop_item_title","the_excerpt",1);

        }

        



        //remove title : filter
        add_action("woocommerce_show_page_title","remove_title");

        function remove_title($val){
            $val=false;
            return $val;
        }

 

}


add_action("wp","my_theme_wc_modif");