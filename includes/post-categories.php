<?php

if (!function_exists('lmb_the_post_categories')) {
  function lmb_the_post_categories() {
    do_action('lmb_before_the_post_categories');

    $categories = get_the_category();

    if (empty($categories)) {
      return;
    }

    $category_html = '<a href="%1$s">%2$s</a>';

    foreach ($categories as $category) {
      $category_string[] = sprintf(
        $category_html,
        esc_url(get_tag_link($category->term_id)),
        esc_html($category->name)
      );
    };

    echo implode(' ', $category_string);

    do_action('lmb_after_the_post_categories');
  }
};