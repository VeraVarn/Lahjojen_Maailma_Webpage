<?php

/**
* Lahjojen Maailma Theme functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Lahjojen Maailma Theme
 */

 function lahjojen_maailma_wp_theme_scripts() {
   wp_enqueue_script('lahjojen-maailma-js', get_template_directory_uri() . 'main-script.js', array(), false, true );
   wp_enqueue_style( 'lahjojen-maailma-style', get_stylesheet_uri(), array(), '1.0.0', 'all' );
 }

 add_action( 'wp_enqueue_scripts', 'lahjojen_maailma_wp_theme_scripts' );

 function lahjojen_maailma_wp_theme_config() {
    register_nav_menus(
      array (
        'lahjojen_maailma_main_menu' => 'Lahjojen Maailma Main Menu', 
        'lahjojen_maailma_footer_menu' => 'Lahjojen Maailma Footer Menu',
      )
    );

 }

 add_action( 'after_setup_theme', 'lahjojen_maailma_wp_theme_config', 0 );

