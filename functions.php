<?php
  function add_theme_scripts() {
    wp_register_style('bootstrap',
      get_template_directory_uri() .
      '/bower_components/bootstrap/dist/css/bootstrap.min.css',
      array(), '20150629', 'all');
    wp_register_style('style', get_stylesheet_uri(),
      array(), '20150629', 'all');
    wp_register_script('bootstrap',
      get_template_directory_uri() .
      '/bower_components/bootstrap/dist/js/bootstrap.min.js',
      array('jquery'), '20150629', true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style');
    wp_enqueue_script('bootstrap');
  }
  function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action('wp_enqueue_scripts', 'add_theme_scripts');
  add_action( 'init', 'register_my_menu' );
// REMOVED CLOSING TAG PER WP CODING STANDARDS
