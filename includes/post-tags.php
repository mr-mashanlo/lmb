<?php

if (!function_exists('lmb_the_post_tags')) {
  function lmb_the_post_tags() {
    do_action('lmb_before_the_post_tags');

    $tags = get_the_tags();

    if (empty($tags)) {
      return;
    };

    $tag_html = '<li class="tags__item"><a href="%1$s" class="tags__button">%2$s</a></li>';

    foreach ($tags as $tag) {
      $tag_string[] = sprintf(
        $tag_html,
        esc_url(get_tag_link($tag->term_id)),
        esc_html($tag->name)
      );
    };

    echo '<ul class="tags">' . implode(' ', $tag_string) . '</ul>';

    do_action('lmb_after_the_post_tags');
  }
};