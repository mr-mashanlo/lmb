<?php

if ( !function_exists( 'lmb_the_posts' ) ) {
  function lmb_the_posts() {
    do_action( 'lmb_before_the_posts' );

    if ( have_posts() ) {

      echo '<div class="posts">';

      while ( have_posts() ) {
        the_post();
        get_template_part( 'templates/content', get_post_type() );
      };

      echo '</div>';

      $post_navigator_string = sprintf(
        '<section class="section"><div class="container">%1$s</div></section>',
        lmb_get_page_navigator()
      );

      echo lmb_get_page_navigator() ? $post_navigator_string : '';
    } else {
      get_template_part( 'templates/content', 'none' );
    }

    do_action( 'lmb_after_the_posts' );
  };
};