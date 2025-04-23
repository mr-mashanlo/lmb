<?php

if (!function_exists('lmb_the_post_content')) {
  function lmb_the_post_content() {
    do_action('lmb_before_the_post_content');

    $content_html = '<div class="content">%1$s</div>';

    $content_string = sprintf(
      $content_html,
      is_singular() ? get_the_content() : get_the_excerpt()
    );

    echo $content_string;

    do_action('lmb_after_the_post_content');
  };
};