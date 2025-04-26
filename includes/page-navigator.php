<?php

if ( !function_exists( 'lmb_get_page_navigator' ) ) {
  function lmb_get_page_navigator() {
    do_action( 'lmb_before_get_page_navigator' );

    global $paged, $wp_query;

    $max_page = $wp_query->max_num_pages;
    $next_page = $paged + 1;

    if ( $paged > 1 ) {
      $prev_string = sprintf(
        '<a href="%1$s" class="navigator-link navigator-link--horizontal"><svg class="navigator-link__icon" viewBox="0 0 512 384" xmlns="http://www.w3.org/2000/svg"><path d="M448 48C448 30.3 462.3 16 480 16C497.7 16 512 30.3 512 48L512 144C512 197 469 240 416 240L109.3 240L182.7 313.4C195.2 325.9 195.2 346.2 182.7 358.7C170.2 371.2 149.9 371.2 137.4 358.7L9.39998 230.7C-3.09998 218.2 -3.09998 197.9 9.39999 185.4L137.4 57.4C149.9 44.9 170.2 44.9 182.7 57.4C195.2 69.9 195.2 90.2 182.7 102.7L109.3 176L416 176C433.7 176 448 161.7 448 144L448 48Z" fill="inherit"/></svg><span class="navigator-link__title">%2$s</span></a>',
        previous_posts( false ),
        esc_html( 'Previous page', 'lmb' )
      );
    };

    if ( $next_page <= $max_page ) {
      $next_string = sprintf(
        '<a href="%1$s" class="navigator-link navigator-link--horizontal"><span class="navigator-link__title">%2$s</span><svg class="navigator-link__icon" viewBox="0 0 512 384" xmlns="http://www.w3.org/2000/svg"><path d="M64 336C64 353.7 49.7 368 32 368C14.3 368 -6.25073e-07 353.7 -1.39876e-06 336L-5.59506e-06 240C-7.91176e-06 187 43 144 96 144L402.7 144L329.3 70.6C316.8 58.1 316.8 37.8 329.3 25.3C341.8 12.8 362.1 12.8 374.6 25.3L502.6 153.3C515.1 165.8 515.1 186.1 502.6 198.6L374.6 326.6C362.1 339.1 341.8 339.1 329.3 326.6C316.8 314.1 316.8 293.8 329.3 281.3L402.7 208L96 208C78.3 208 64 222.3 64 240L64 336Z" fill="inherit"/></svg></a>',
        next_posts( $max_page, false ),
        esc_html( 'Next page', 'lmb' )
      );
    };

    if ( $paged < 2 && !next_posts( $max_page, false ) ) {
      return;
    };

    if ( !is_singular( 'post' ) ) {
      return;
    };

    $navigator_string = sprintf(
      '<div class="navigator"><div class="navigator__prev">%1$s</div><div class="navigator__next">%2$s</div></div>',
      $paged > 1 ? $prev_string : '',
      next_posts( $max_page, false ) ? $next_string : ''
    );

    return $navigator_string;

    do_action( 'lmb_after_get_page_navigator' );
  };
};