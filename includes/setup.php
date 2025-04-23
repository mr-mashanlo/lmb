<?php

function lmb_setup() {

  load_theme_textdomain( 'lmb', get_template_directory() . '/languages' );

  add_theme_support( 'automatic-feed-links' );

  add_theme_support( 'title-tag' );

  add_theme_support( 'post-thumbnails' );

  add_theme_support( 'customize-selective-refresh-widgets' );

  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );

  add_theme_support(
    'custom-logo',
    array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    )
  );

  register_nav_menus(
    array(
      'menu-1' => esc_html__( 'Primary', 'lmb' ),
      'menu-2' => esc_html__( 'Secondary', 'lmb' ),
    )
  );

}

add_action( 'after_setup_theme', 'lmb_setup' );