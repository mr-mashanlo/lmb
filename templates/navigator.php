<?php

if ( !function_exists( 'lmb_get_navigator' ) ) {
  function lmb_get_navigator() {
    do_action( 'lmb_before_get_navigator' );

    global $paged, $wp_query;

    $max_page = $wp_query->max_num_pages;
    $next_page = $paged + 1;

    if ( $paged > 1 ) {
      $prev_string = sprintf(
        '<a href="%1$s" class="navigator__link"><svg class="navigator__icon" viewBox="0 0 62 24" xmlns="http://www.w3.org/2000/svg"><path d="M58 18V15C58 13.9391 57.5786 12.9217 56.8284 12.1716C56.0783 11.4214 55.0609 11 54 11H10H4" fill="none" stroke="inherit" stroke-width="2" /><path d="M9 16L4 11L9 6" fill="none" stroke="inherit" stroke-width="2" /></svg></a>',
        previous_posts( false ),
        esc_html__( 'Previous page', 'lmb' )
      );
    };

    if ( $next_page <= $max_page ) {
      $next_string = sprintf(
        '<a href="%1$s" class="navigator__link"><svg class="navigator__icon" viewBox="0 0 62 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 6L4 9C4 10.0609 4.42143 11.0783 5.17158 11.8284C5.92172 12.5786 6.93913 13 8 13L52 13L58 13" fill="none" stroke="inherit" stroke-width="2" /><path d="M53 8L58 13L53 18" fill="none" stroke="inherit" stroke-width="2" /></svg></a>',
        next_posts( $max_page, false ),
        esc_html__( 'Next page', 'lmb' )
      );
    };

    if ( $paged < 2 && !next_posts( $max_page, false ) ) {
      return;
    };

    $navigator_string = sprintf(
      '<div class="navigator"><div class="navigator__prev">%1$s</div><div class="navigator__next">%2$s</div></div>',
      $paged > 1 ? $prev_string : '',
      next_posts( $max_page, false ) ? $next_string : ''
    );

    return $navigator_string;

    do_action( 'lmb_after_get_navigator' );
  };
};