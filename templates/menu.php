<?php

if ( !function_exists( 'lmb_the_menu' ) ) {
  function lmb_the_menu( $options ) {
    do_action( 'lmb_before_the_menu' ) ;

    $default = array(
      'theme_location' => 'menu-1',
      'container'      => false,
      'items_wrap'     => '<ul class="header__menu %2$s">%3$s</ul>',
      'depth'           => 1
    );

    $settings = array_merge( $default, $options );

    wp_nav_menu( $settings );

    do_action( 'lmb_after_the_menu' ) ;
  };
};