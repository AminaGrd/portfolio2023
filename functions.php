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


// suppression de la balise title dans la function wp_head
// remove_action( 'wp_head', '_wp_render_title_tag', 1 );

// suppression des attributs type sur les balises script et style (w3c)
add_action(
  'after_setup_theme',
  function() {
      add_theme_support( 'html5', [ 'script', 'style' ] );
  }
);