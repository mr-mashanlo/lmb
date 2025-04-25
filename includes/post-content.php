<?php

if ( !function_exists( 'lmb_get_post_content' ) ) {
  function lmb_get_post_content() {
    do_action( 'lmb_before_get_post_content' );

    $content_string = sprintf(
      '<div class="content">%1$s</div>',
      is_singular() ? get_the_content() : get_the_excerpt()
    );

    return $content_string;

    do_action( 'lmb_after_get_post_content' );
  };
};