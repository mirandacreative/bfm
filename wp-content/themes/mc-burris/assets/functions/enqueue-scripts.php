<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    
    // Slick slider plugin for homepage
    if ( is_front_page() ){
        // Slick js
        wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/vendor/slick/slick.min.js', array( 'jquery' ), '1.5.7', true );
        // Slick CSS
        wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/vendor/slick/slick.css', array(), '', 'all' );
        // Slick CSS Theme
        wp_enqueue_style( 'slick-css-theme', get_template_directory_uri() . '/vendor/slick/slick-theme.css', array(), '', 'all' );
    }

    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );
    
    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.min.js', array( 'jquery' ), '6.0', true );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);