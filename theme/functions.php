<?php
// Theme Setup
function aqualux_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'aqualux_setup');

// Enqueue Scripts
function aqualux_scripts() {
    // Theme stylesheet
    wp_enqueue_style('aqualux-style', get_stylesheet_uri());
    
    // Custom JavaScript
    wp_enqueue_script('aqualux-script', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'aqualux_scripts');
?>