<?php
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');

    // Css Styles
    wp_enqueue_style( 'normalize',  get_stylesheet_directory_uri() . '/styles/normalize.min.css' );
    wp_enqueue_style( 'animation',  get_stylesheet_directory_uri() . '/styles/plugin/animations.css' );
    wp_enqueue_style( 'main',  get_stylesheet_directory_uri() . '/styles/main.css' );

    // Js Scripts
    wp_enqueue_script( 'animation',  get_stylesheet_directory_uri() . '/scripts/plugin/css3-animate-it.js' , array( 'jquery' ), '20140616', true);
    wp_enqueue_script( 'main',  get_stylesheet_directory_uri() . '/scripts/main.js' , array( 'jquery' ), '20140616', true);

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// Navigation Menu Customization
require_once( get_stylesheet_directory() . '/inc/wp_bootstrap_navwalker.php' );

// Equipments Post Type
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

function my_taxonomies_equipments() {
    $labels = array(
        'name'              => _x( 'Equipment Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Equipment Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Equipment Categories' ),
        'all_items'         => __( 'All Equipment Categories' ),
        'parent_item'       => __( 'Parent Equipment Category' ),
        'parent_item_colon' => __( 'Parent Equipment Category:' ),
        'edit_item'         => __( 'Edit Equipment Category' ),
        'update_item'       => __( 'Update Equipment Category' ),
        'add_new_item'      => __( 'Add New Equipment Category' ),
        'new_item_name'     => __( 'New Equipment Category' ),
        'menu_name'         => __( 'Equipment Categories' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'equipments_category', 'equipments', $args );
}
add_action( 'init', 'my_taxonomies_equipments', 0 );

// Services Post Type
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

// News Post Type
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

// Customized image sizes
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'banner-img', 1800 ); //sets the banner size
    add_image_size( 'background-img', 1200 ); //sets the banner size
    add_image_size( 'post-img', 700); //sets the post image size
    add_image_size( 'gallery-large', 1200); //sets the large gallery images size
    add_image_size( 'gallery-small', 625, 410, true); //sets the large gallery images size
}

// Limit the excerpt words
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

// Wordpress Admin Category Filter for Custom Post Types
function taxonomy_filter_restrict_manage_posts() {
    global $typenow;
    $post_types = get_post_types( array( '_builtin' => false ) );
    if ( in_array( $typenow, $post_types ) ) {
        $filters = get_object_taxonomies( $typenow );
        foreach ( $filters as $tax_slug ) {
            $tax_obj = get_taxonomy( $tax_slug );
            wp_dropdown_categories( array(
                'show_option_all' => __('Show All '.$tax_obj->label ),
                'taxonomy' 	  => $tax_slug,
                'name' 		  => $tax_obj->name,
                'orderby' 	  => 'name',
                'selected' 	  => (isset($_GET[$tax_slug])),
                'hierarchical' 	  => $tax_obj->hierarchical,
                'show_count' 	  => false,
                'hide_empty' 	  => true
            ) );
        }
    }
}
add_action( 'restrict_manage_posts', 'taxonomy_filter_restrict_manage_posts' );
function taxonomy_filter_post_type_request( $query ) {
    global $pagenow, $typenow;
    if ( 'edit.php' == $pagenow ) {
        $filters = get_object_taxonomies( $typenow );
        foreach ( $filters as $tax_slug ) {
            $var = &$query->query_vars[$tax_slug];
            if ( isset( $var ) ) {
                $term = get_term_by( 'id', $var, $tax_slug );
                $var = $term->slug;
            }
        }
    }
}
add_filter( 'parse_query', 'taxonomy_filter_post_type_request' );

