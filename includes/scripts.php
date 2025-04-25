<?php

if (!defined( '_S_VERSION' ) ) {
  define( '_S_VERSION', '1.0.0' );
}

function lmb_scripts() {
  wp_enqueue_style( 'lmb-style', get_stylesheet_uri(), array(), _S_VERSION);
  wp_enqueue_style( 'lmb-global-style', get_template_directory_uri() . '/assets/dist/styles/main.min.css', array(), _S_VERSION );
  wp_enqueue_script( 'lmb-global-script', get_template_directory_uri() . '/assets//dist/scripts/main.min.js', array(), _S_VERSION, true );
};

add_action( 'wp_enqueue_scripts', 'lmb_scripts' );