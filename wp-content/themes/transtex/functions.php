<?php
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');

    // Css Styles
    wp_enqueue_style( 'normalize',  get_stylesheet_directory_uri() . '/styles/normalize.min.css' );
    wp_enqueue_style( 'main',  get_stylesheet_directory_uri() . '/styles/main.css' );

    // Js Scripts
    wp_enqueue_script( 'main',  get_stylesheet_directory_uri() . '/scripts/main.js' , array( 'jquery' ), '20140616', true);

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function my_custom_post_equipments() {
    $labels = array(
        'name'               => _x( 'Equipments', 'post type general name' ),
        'singular_name'      => _x( 'Equipment', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Equipment' ),
        'add_new_item'       => __( 'Add New Equipment' ),
        'edit_item'          => __( 'Edit Equipment' ),
        'new_item'           => __( 'New Equipment' ),
        'all_items'          => __( 'All Equipments' ),
        'view_item'          => __( 'View Equipment' ),
        'search_items'       => __( 'Search Equipment' ),
        'not_found'          => __( 'No Equipment found' ),
        'not_found_in_trash' => __( 'No Equipment found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Equipments'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Equipments and Equipments specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );
    register_post_type( 'equipments', $args );
}
add_action( 'init', 'my_custom_post_equipments' );

function my_custom_post_services() {
    $labels = array(
        'name'               => _x( 'Services', 'post type general name' ),
        'singular_name'      => _x( 'Service', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Service' ),
        'add_new_item'       => __( 'Add New Service' ),
        'edit_item'          => __( 'Edit Service' ),
        'new_item'           => __( 'New Service' ),
        'all_items'          => __( 'All Services' ),
        'view_item'          => __( 'View Service' ),
        'search_items'       => __( 'Search Service' ),
        'not_found'          => __( 'No Service found' ),
        'not_found_in_trash' => __( 'No Service found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Services'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Services and Services specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );
    register_post_type( 'services', $args );
}
add_action( 'init', 'my_custom_post_services' );

function my_custom_post_news() {
    $labels = array(
        'name'               => _x( 'News', 'post type general name' ),
        'singular_name'      => _x( 'News', 'post type singular name' ),
        'add_new'            => _x( 'Add News', 'Service' ),
        'add_new_item'       => __( 'Add New News' ),
        'edit_item'          => __( 'Edit News' ),
        'new_item'           => __( 'New News' ),
        'all_items'          => __( 'All News' ),
        'view_item'          => __( 'View News' ),
        'search_items'       => __( 'Search News' ),
        'not_found'          => __( 'No News found' ),
        'not_found_in_trash' => __( 'No News found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'News'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our News and News specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );
    register_post_type( 'news', $args );
}
add_action( 'init', 'my_custom_post_news' );

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'banner-img', 1800 ); //sets the banner size
    add_image_size( 'post-img', 700); // (cropped)
}

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).' ...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}