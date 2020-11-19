<?php


/****************************************/
/* Loading in the stylesheet */
/****************************************/

function load_stylesheet() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/css/stylesheet.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheet');

/****************************************/
/****************************************/



/****************************************/
/* Adding user generated menu support */
/****************************************/
add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu'          => 'Top Menu Location',
        'mobile-menu'       => 'Mobile Menu Location'
    )
);

/****************************************/
/****************************************/



/****************************************/
/* Adding custom logo functionality & favicon */
/****************************************/

function mandatory_custom_logo_setup() {
    $defaults = array(
    'height'      => 'auto',
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
   'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'mandatory_custom_logo_setup' );

   /****************************************/
   /****************************************/


