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

function custom_logo_setup() {
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
   add_action( 'after_setup_theme', 'custom_logo_setup' );
   

function custom_post_type() {
    $labels = array(
        'name' => 'Recipes',
        'singular_name' => 'Recipe',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Recipes',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_achive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('recipe', $args);
}

add_action('init', 'custom_post_type');