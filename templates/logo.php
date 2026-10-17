<?php

if ( !function_exists( 'lmb_get_logo' ) ) {
  function lmb_get_logo() {
    do_action( 'lmb_before_get_logo' );

    $home_url = home_url( '/' );
    $site_name = get_bloginfo( 'name' );
    $site_description = get_bloginfo( 'description' );

    $image_id = get_theme_mod( 'custom_logo' );
    $image_url = get_site_icon_url();;

    $image_string = sprintf(
      '<a href="%1$s"><img src="%2$s" alt="%3$s" class="logo__image"></a>',
      esc_url( $home_url ),
      esc_url( $image_url ),
      esc_html( $site_name )
    );

    $name_string = sprintf(
      '<a href="%1$s" class="logo__title">%2$s</a>',
      esc_url( $home_url ),
      esc_html( $site_name )
    );

    $description_string = sprintf(
      '<span class="logo__description"> / %1$s</span>',
      esc_html( $site_description )
    );

    $logo_string = sprintf(
      '<div class="logo">%1$s %2$s %3$s</div>',
      has_site_icon() ? $image_string : '',
      $name_string,
      $site_description ? $description_string : ''
    );

    return $logo_string;

    do_action( 'lmb_after_get_logo' );
  };
};