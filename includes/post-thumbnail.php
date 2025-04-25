<?php

if ( !function_exists( 'lmb_get_post_thumbnail' ) ) {
  function lmb_get_post_thumbnail() {
    do_action( 'lmb_before_get_post_thumbnail' );

    if ( post_password_required() || is_attachment() || !has_post_thumbnail() ) {
      return;
    }

    $thumbnail_string = sprintf(
      '<img src="%1$s" alt="%2$s" class="post-header__cover">',
      esc_url( get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ) ),
      esc_html( get_the_title() )
    );

    return $thumbnail_string;

    do_action( 'lmb_after_get_post_thumbnail' );
  };
};