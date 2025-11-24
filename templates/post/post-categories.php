<?php

if ( !function_exists( 'lmb_get_post_categories' ) ) {
  function lmb_get_post_categories() {
    do_action( 'lmb_before_get_post_categories' );

    $categories = get_the_category();

    if ( empty( $categories ) ) {
      return;
    };

    foreach ( $categories as $category ) {
      $category_string[] = sprintf(
        '<a href="%1$s" class="categories__link">%2$s</a>',
        esc_url( get_tag_link( $category->term_id ) ),
        esc_html( $category->name )
      );
    };

    return '<div class="categories">' . implode( ', ', $category_string ) . '</div>';

    do_action( 'lmb_after_get_post_categories' );
  };
};