<?php

add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

if ( !function_exists( 'lmb_get_archive_title' ) ) {
  function lmb_get_archive_title() {
    do_action( 'lmb_before_get_archive_title' );

    return '<h1 class="heading">' . esc_html( get_the_archive_title() ) . '</h1>';

    do_action( 'lmb_after_get_archive_title' );
  };
};