<?php

if ( !function_exists( 'lmb_get_logo' ) ) {
  function lmb_get_logo() {
    do_action( 'lmb_before_get_logo' );

    $home_url = home_url( '/' );
    $site_name = get_bloginfo( 'name' );
    $site_description = get_bloginfo( 'description' );

    $image_id = get_theme_mod( 'custom_logo' );
    $image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'full' ) : '';

    $image_string = sprintf(
      '<a href="%1$s" class="brand__link"><img src="%2$s" alt="%3$s" class="brand__icon"></a>',
      esc_url( $home_url ),
      esc_url( $image_url ),
      esc_html( $site_name )
    );

    $name_string = sprintf(
      '<a href="%1$s" class="brand__name">%2$s</a>',
      esc_url( $home_url ),
      esc_html( $site_name )
    );

    $description_string = sprintf(
      '<span class="brand__description"> / %1$s</span>',
      esc_html( $site_description )
    );

    $logo_string = sprintf(
      '<div class="brand">%1$s <p class="brand__content">%2$s %3$s</p></div>',
      $image_id ? $image_string : '',
      $name_string,
      $site_description ? $description_string : ''
    );

    return $logo_string;

    do_action( 'lmb_after_get_logo' );
  };
};