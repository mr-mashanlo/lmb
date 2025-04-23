<?php

if (!function_exists('lmb_the_post_meta')) {
  function lmb_the_post_meta() {
    do_action('lmb_before_the_post_meta');

    global $authordata;

    $time_html = '<time datetime="%1$s">%2$s</time>';
    $time_string = sprintf(
      $time_html,
      esc_attr(get_the_date(DATE_W3C)),
      esc_html(get_the_date('j F Y'))
    );

    $author_html = '<a href="%1$s" class="link">%2$s</a>';
    $author_string = sprintf(
      $author_html,
      esc_url(get_author_posts_url($authordata->ID, $authordata->user_nicename)),
      esc_html(get_the_author())
    );

    $meta_html = '<div class="post__meta">%1$s %2$s</div>';
    $meta_string = sprintf(
      $meta_html,
      '<span>' . esc_html('Author', 'lmb') . '</span> ' . $author_string . ', ',
      '<span>' . esc_html('posted', 'lmb') . '</span> ' . $time_string
    );

    echo $meta_string;

    do_action('lmb_after_the_post_meta');
  };
};