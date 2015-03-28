<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',  get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
    wp_enqueue_style( 'child-style-fa', get_stylesheet_directory_uri() . '/inc/fontawesome/css/font-awesome.min.css');
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function sela_child_theme_setup() {
	load_child_theme_textdomain( 'sela-child', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'sela_child_theme_setup' );

/* Enabling shortcode processing for widgets */
add_filter('widget_text', 'do_shortcode');

?>