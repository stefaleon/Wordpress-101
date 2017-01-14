<?php

function theme01_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri().'/css/theme01.css', array(), '0.0.1','all');
    wp_enqueue_script('customjs', get_template_directory_uri().'/js/theme01.js', array(), '0.0.1', true);
}

add_action('wp_enqueue_scripts', 'theme01_script_enqueue');

 ?>
