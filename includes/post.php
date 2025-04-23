<?php

if (!function_exists('lmb_the_post')) {
  function lmb_the_post() {
    do_action('lmb_before_the_post');

    if (have_posts()) {
      while (have_posts()) {
        the_post();
        get_template_part('templates/content', 'single');
      }
    }

    do_action('lmb_after_the_post');
  }
}