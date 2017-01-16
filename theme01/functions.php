<?php
/*
    ====================================
    Include scripts
    ====================================
*/
function theme01_script_enqueue() {
    //css
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.3.7','all');
    wp_enqueue_style('customstyle', get_template_directory_uri().'/css/theme01.css', array(), '0.0.1','all');
    //js
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '0.0.1', true);
    wp_enqueue_script('customjs', get_template_directory_uri().'/js/theme01.js', array(), '0.0.1', true);
}

add_action('wp_enqueue_scripts', 'theme01_script_enqueue');


/*
    ====================================
    Theme support funtion
    ====================================
*/

function theme01_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}


add_action('init', 'theme01_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'image', 'video'));

 ?>
