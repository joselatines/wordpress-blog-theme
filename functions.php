<?php

function BLOG01_ADD_CSS_JS() {
    // ACTIVING THE STYLESHEET
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_script( 'NAVEGATION', get_template_directory_uri() . '/js/nav.js', array ( 'jquery' ), '1.1', true);
    // ADDING WIDGET STYLES
    wp_enqueue_script( 'WIDGET_STYLES', get_template_directory_uri() . '/js/widget-styles.js', array('NAVEGATION'), '1.0', true);
}
// RUNNIG ADD_MY_CSS_JS
add_action( 'wp_enqueue_scripts', 'BLOG01_ADD_CSS_JS' );

function BLOG01_SETUP() {
    // ADDING THUMBNAIL
    if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support('post-thumbnails');
    // set_post_thumbnail_size(1280, 800, true); // 50 pixels wide by 50 pixels tall, resize mode
    }

    // Dynamic page tile
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'BLOG01_SETUP');

// REGISTER MENUS
function BLOG01_REGISTER_MY_MENUS() {
    register_nav_menus(
      array(
        'header-menu' => __( 'My Header Menu' ),
       )
     );
   }
   add_action( 'init', 'BLOG01_REGISTER_MY_MENUS' );

// ADD SIDEBAR
add_action( 'widgets_init', 'BLOG01_WIDGETS' );
function BLOG01_WIDGETS() {
    register_sidebar( array(
        'name'          => __( 'Mi sidebar puto'),
        'id'            => 'sidebar-right',
        'description' => __('Add widgets here'),
        'before_widget' => '<aside class="aside">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ));
}
