<?php

if ( !function_exists( 'lmb_get_post_tags' ) ) {
  function lmb_get_post_tags() {
    do_action( 'lmb_before_get_post_tags' );

    $tags = get_the_tags();

    if ( empty( $tags ) ) {
      return;
    };

    foreach ( $tags as $tag ) {
      $tag_string[] = sprintf(
        '<li class="tags__item"><a href="%1$s" class="tags__button">%2$s</a></li>',
        esc_url( get_tag_link( $tag->term_id ) ),
        esc_html( $tag->name )
      );
    };

    return '<ul class="tags">' . implode( ' ', $tag_string ) . '</ul>';

    do_action( 'lmb_after_get_post_tags' );
  };
};