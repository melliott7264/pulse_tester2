<?php

/*
* Child them to understrap for Pulse Creative assessment
* Author: Mark Elliott ©2022, all rights reserved
*/


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'pulsetester', get_stylesheet_uri(), array('understrap'),wp_get_theme()->get('Version'));
}

add_theme_support( 'title-tag' );

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
});


