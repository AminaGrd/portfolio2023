<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );

function register_assets(){
	
    wp_enqueue_style(
          'reset-css',
          get_template_directory_uri().'/assets/styles/reset.css',
          array(),
          '1.0'
    );
	
    wp_enqueue_style(
          'main-css',
          get_template_directory_uri().'/assets/styles/main.css',
          array(),
          '1.0'
    );

}
add_action('wp_enqueue_scripts', 'register_assets');
