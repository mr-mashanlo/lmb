<?php

if (!function_exists('lmb_the_post_title')) {
  function lmb_the_post_title() {
    do_action('lmb_before_the_post_title');

    is_singular()
      ?
      the_title('<h1 class="post__title text-title-h1 text-weight-bold">', '</h1>')
      :
      the_title('<h2 class="post__title text-title-h2 text-weight-bold"><a href="' . esc_url(get_permalink()) . '" class="link">', '</a></h2>');

    do_action('lmb_after_the_post_title');
  };
};