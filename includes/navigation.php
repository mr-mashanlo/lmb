<?php

if (!function_exists('lmb_the_navigation')) {
  function lmb_the_navigation( $options ) {
    do_action('lmb_before_the_navigation');

    $default = array(
      'theme_location' => 'menu-1',
      'container'      => false,
      'depth'          => 1,
      'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
    );

    $settings = array_merge($default, $options);

    wp_nav_menu($settings);

    do_action('lmb_after_the_navigation');
  }
}