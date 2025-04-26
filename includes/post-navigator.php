<?php

if ( !function_exists( 'lmb_get_post_navigator' ) ) {
  function lmb_get_post_navigator() {
    do_action( 'lmb_before_get_post_navigator' );

    $prev_post = get_previous_post();

    if ( !empty( $prev_post ) ) {
      $prev_string = sprintf(
        '<a href="%1$s" class="navigator-link navigator-link--prev"><span class="navigator-link__title">' . esc_html( 'Previous post', 'lmb' ) . '</span> <span class="navigator-link__text link">%2$s</span> <time datetime="%3$s" class="navigator-link__time">%4$s</time></a>',
        esc_url( get_permalink( $prev_post->ID ) ),
        esc_html( get_the_title( $prev_post->ID ) ),
        esc_attr( get_the_date( DATE_W3C, $prev_post->ID ) ),
        esc_html( get_the_date( 'j F Y', $prev_post->ID ) )
      );
    };

    $next_post = get_next_post();

    if ( !empty( $next_post ) ) {
      $next_string = sprintf(
        '<a href="%1$s" class="navigator-link navigator-link--next"><span class="navigator-link__title">' . esc_html( 'Next post', 'lmb' ) . '</span> <span class="navigator-link__text link">%2$s</span> <time datetime="%3$s" class="navigator-link__time">%4$s</time></a>',
        esc_url( get_permalink( $next_post->ID ) ),
        esc_html( get_the_title( $next_post->ID ) ),
        esc_attr( get_the_date( DATE_W3C, $next_post->ID ) ),
        esc_html( get_the_date( 'j F Y', $next_post->ID ) )
      );
    };

    if ( empty( $prev_post ) && empty( $next_post ) ) {
      return;
    };

    $navigator_string = sprintf(
      '<div class="navigator"><div class="navigator__prev">%1$s</div><div class="navigator__next">%2$s</div></div>',
      $prev_post ? $prev_string : '',
      $next_post ? $next_string : ''
    );

    return $navigator_string;

    do_action( 'lmb_after_get_post_navigator' );
  };
};