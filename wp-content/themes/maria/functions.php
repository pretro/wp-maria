<?php
// Enqueue styles and scripts
function blank_enqueue_assets() {
    wp_enqueue_style('blank', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));
    wp_dequeue_style('mc4wp-form-themes');
}
add_action('wp_enqueue_scripts', 'blank_enqueue_assets');

// Register menus
function blank_register_nav_menus() {
    register_nav_menus([
        'main-menu' => 'Main Menu',
    ]);
}
add_action('init', 'blank_register_nav_menus');

// Allow WordPress to manage the title tag
add_theme_support('title-tag');

// Add image sizes
add_image_size('featured_thumbnail', 460, 180, true);
add_image_size('work_thumbnail', 200, 108, true);

// Add support for post thumbnails
add_theme_support('post-thumbnails');
