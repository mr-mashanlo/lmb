<?php

function lmb_setup() {

  // load_theme_textdomain( 'lmb', get_template_directory() . '/languages' );

  add_theme_support( 'automatic-feed-links' );

  add_theme_support( 'title-tag' );

  add_theme_support( 'post-thumbnails' );

  add_theme_support( 'customize-selective-refresh-widgets' );

  add_theme_support( 'custom-logo' );

  add_theme_support(
    'html5',
    array(
      'search-form',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );

  register_nav_menus(
    array(
      'menu-1' => esc_html__( 'Primary', 'lmb' ),
      'menu-2' => esc_html__( 'Secondary', 'lmb' ),
    )
  );

};

add_action( 'after_setup_theme', 'lmb_setup' );