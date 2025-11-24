<?php

if ( !function_exists( 'lmb_get_archive_content' ) ) {
  function lmb_get_archive_content() {
    do_action( 'lmb_before_get_archive_content' );

    if ( get_the_archive_description() ) {
      return '<div class="archive__content content">' . get_the_archive_description() . '</div>';
    }

    do_action( 'lmb_after_get_archive_content' );
  };
};