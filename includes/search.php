<?php

if ( !defined( '_S_VERSION' ) ) {
  define( '_S_VERSION', '1.0.0' );
}

function lmb_search_scripts() {
  wp_enqueue_script( 'custom-ajax-search', get_stylesheet_directory_uri() . '/assets/dist/search.min.js', array(), _S_VERSION, true );
  wp_localize_script( 'custom-ajax-search', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

add_action( 'wp_enqueue_scripts', 'lmb_search_scripts' );