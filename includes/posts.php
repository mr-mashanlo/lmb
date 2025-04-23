<?php

if (!function_exists('lmb_the_posts')) {
  function lmb_the_posts() {
    do_action('lmb_before_the_posts');

    if (have_posts()) {
      echo '<div class="posts">';
      while (have_posts()) {
        the_post();
        get_template_part('templates/content', get_post_type());
      }
      echo '</div>';
    } else {
      get_template_part('templates/content', 'none');
    }

    do_action('lmb_after_the_posts');
  }
}