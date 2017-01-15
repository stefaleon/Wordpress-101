<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Theme01</title>
        <?php wp_head();?>
    </head>

    <?php
        if(is_front_page()):
            $theme01_classes = array('theme01_class', 'my_class');
        else:
            $theme01_classes = array('no_theme01_class');
        endif;
    ?>

    <body <?php body_class($theme01_classes); ?>>

        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>

        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>"
        width=="<?php echo get_custom_header()->width ?>" alt=""/>
