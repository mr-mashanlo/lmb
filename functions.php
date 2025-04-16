<?php

if ( ! defined( '_S_VERSION' ) ) {
  define( '_S_VERSION', '1.0.0' );
}



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



function lmb_widgets_init() {
  register_sidebar(
    array(
      'name'          => esc_html__( 'Sidebar', 'lmb' ),
      'id'            => 'sidebar-1',
      'description'   => esc_html__( 'Add widgets here.', 'lmb' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}

add_action( 'widgets_init', 'lmb_widgets_init' );



function lmb_scripts() {
  wp_enqueue_style( 'lmb-style', get_stylesheet_uri(), array(), _S_VERSION );
}

add_action( 'wp_enqueue_scripts', 'lmb_scripts' );



function mytheme_customize_register( $wp_customize ) {
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

add_action('customize_register', 'mytheme_customize_register');


// require get_template_directory() . '/inc/custom-header.php';

// require get_template_directory() . '/inc/template-tags.php';

// require get_template_directory() . '/inc/template-functions.php';

// require get_template_directory() . '/inc/customizer.php';

// if ( defined( 'JETPACK__VERSION' ) ) {
//   require get_template_directory() . '/inc/jetpack.php';
// }
