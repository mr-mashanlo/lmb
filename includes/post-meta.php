<?php

if ( !function_exists( 'lmb_get_post_meta' ) ) {
  function lmb_get_post_meta() {
    do_action( 'lmb_before_get_post_meta' );

    global $authordata;

    $time_string = sprintf(
      '<time datetime="%1$s">%2$s</time>',
      esc_attr( get_the_date( DATE_W3C ) ),
      esc_html( get_the_date( 'j F Y' ) )
    );

    $author_string = sprintf(
      '<a href="%1$s" class="link">%2$s</a>',
      esc_url( get_author_posts_url( $authordata->ID, $authordata->user_nicename ) ),
      esc_html( get_the_author() )
    );

    $meta_string = sprintf(
      '<div class="post__meta">%1$s %2$s</div>',
      '<span>' . esc_html( 'Author', 'lmb' ) . '</span> ' . $author_string . ', ',
      '<span>' . esc_html( 'posted', 'lmb' ) . '</span> ' . $time_string
    );

    return $meta_string;

    do_action( 'lmb_after_get_post_meta' );
  };
};