<?php

function lmb_sidebar( $wp_customize ) {
  $wp_customize -> add_section( 'sidebar_settings', array(
    'title'    => __('Sidebar Settings', 'lmb'),
    'priority' => 30,
  ) );

  $wp_customize -> add_setting( 'display_sidebar', array(
    'default'           => true,
    'sanitize_callback' => 'wp_validate_boolean',
  ) );

  $wp_customize -> add_control( 'display_sidebar', array(
    'type'    => 'checkbox',
    'label'   => __('Display Sidebar', 'lmb'),
    'section' => 'sidebar_settings',
  ) );
}

add_action( 'customize_register', 'lmb_sidebar' );