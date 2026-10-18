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
        '<a href="%1$s" class="tags__link">%2$s</a>',
        esc_url( get_tag_link( $tag->term_id ) ),
        esc_html( $tag->name )
      );
    };

    return '<div class="tags">' . implode( ', ', $tag_string ) . '</div>';

    do_action( 'lmb_after_get_post_tags' );
  };
};