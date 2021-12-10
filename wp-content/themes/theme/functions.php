<?php
add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
add_action( 'widgets_init', 'register_my_widgets' );
add_filter( 'show_admin_bar' , 'admin_bar');
add_action( 'init', 'wpt_register_js' );
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

function register_my_widgets() {

    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'Sidebar',
        'description'   => 'Sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => "</h3>\n",
    ) );
}

function theme_register_nav_menu() {
    register_nav_menu( 'head', 'head' );
    add_theme_support( 'post-thumbnails', array( 'post', 'news' ) );
    add_image_size( 'post_thumb', 100, 100, true );
}

function style_theme() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

function admin_bar() {
    return false;
}

function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}

function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}

