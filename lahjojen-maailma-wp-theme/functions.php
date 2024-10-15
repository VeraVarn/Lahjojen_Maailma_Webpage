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

    add_theme_support( 'woocommerce', array(
      'thumbnail_image_width'   =>  255,
      'single_image_width'      =>  255,
      'product_grid'            =>  array(
        'default_rows'          =>  25,
        'min-rows'              =>  5,
        'max-rows'              =>  50,
        'default_columns'       =>  4,
        'min-columns'           =>  1,
        'max-columns'           =>  4,
      )
    ) );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    if ( ! isset( $content_width ) ) {
      $content_width = 600;
    }
  }

  add_action( 'after_setup_theme', 'fancy_lab_config', 0 );

  add_action( 'woocommerce_before_main_content', 'lahjojen_maailma_wp_theme_open_container', 5 );
  function lahjojen_maailma_wp_theme_open_container(){
    echo '<div class="container shop-content">';
  }

  add_action( 'woocommerce_after_main_content', 'lahjojen_maailma_wp_theme_close_container', 5 );
  function lahjojen_maailma_wp_theme_close_container(){
    echo '</div>';
  }

  add_action( 'woocommerce_after_shop_loop_item_title' )

 add_action( 'after_setup_theme', 'lahjojen_maailma_wp_theme_config', 0 );

