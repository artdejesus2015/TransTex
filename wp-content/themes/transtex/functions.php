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