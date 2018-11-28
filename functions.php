<?php

//rendre le menu principal modifiable par le back-office de WP
register_nav_menus( array(
'menu-principal' => 'Menu principal'
) );


//appel de la feuille de style 
function wpdocs_theme_name_scripts() {
wp_register_style('main-style', get_template_directory_uri().'style.css', array(), true);
wp_enqueue_style('main-style');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

//rendre le logo personnalisable
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => false,
        'flex-width'  => false,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
