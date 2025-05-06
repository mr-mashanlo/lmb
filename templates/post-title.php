<?php

if ( !function_exists( 'lmb_get_post_title' ) ) {
  function lmb_get_post_title() {
    do_action( 'lmb_before_get_post_title' );

    return is_singular()
      ?
      '<h1 class="post__title text-title-h1 text-weight-bold">' . esc_html( get_the_title() ) . '</h1>'
      :
      '<h2 class="post__title text-title-h2 text-weight-bold"><a href="' . esc_url( get_permalink() ) . '" class="link">' . esc_html( get_the_title() ) . '</a></h2>';

    do_action( 'lmb_after_get_post_title' );
  };
};