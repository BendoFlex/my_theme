<?php
/*
* Customizer Panel
* @package My_Theme
*/

function my_theme_customizer ($wp_customize) {

    $wp_customize->add_section (
        'sec_copyright', array(
            'title'  => 'copyright settings',
            'description' => 'copyright description'
        )
    );

    $wp_customize->add_setting(
        'set_copyright', array(
            'type'               => 'theme_mod',
            'default'            => '',
            'sanitize_callback'  => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright', array(
            'label'              => 'Copyrights',
            'description'        => 'add your copyrights mentions here',
            'section'            => 'sec_copyright',
            'type'               => 'text'
        )
    );
      //filter text fied "sanitize"
}

add_action("customize_register","my_theme_customizer");// see change in wp_option DB => theme_mods_my_theme