<?php

if ( !function_exists( 'lmb_get_post_title' ) ) {
  function lmb_get_post_title() {
    do_action( 'lmb_before_get_post_title' );

    return is_singular()
      ?
      '<h1 class="post__title">' . esc_html( get_the_title() ) . '</h1>'
      :
      '<h2 class="post__title"><a href="' . esc_url( get_permalink() ) . '" class="post__link">' . esc_html( get_the_title() ) . '</a></h2>';

    do_action( 'lmb_after_get_post_title' );
  };
};