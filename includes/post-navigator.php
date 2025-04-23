<?php

if (!function_exists('lmb_the_post_navigator')) {
  function lmb_the_post_navigator() {
    do_action('lmb_before_the_post_navigator');

    $prev_post = get_previous_post();

    if (!empty($prev_post)) {
      $prev_html = '<a href="%1$s" class="navigator-link navigator-link--prev"><span class="navigator-link__title">' . esc_html('Previous post', 'lmb') . '</span> <span class="navigator-link__text link">%2$s</span> <time datetime="%3$s" class="navigator-link__time">%4$s</time></a>';

      $prev_string = sprintf(
        $prev_html,
        esc_url(get_permalink($prev_post->ID)),
        esc_html(get_the_title($prev_post->ID)),
        esc_attr(get_the_date(DATE_W3C, $prev_post->ID)),
        esc_html(get_the_date('j F Y', $prev_post->ID))
      );
    };

    $next_post = get_next_post();

    if (!empty($next_post)) {
      $next_html = '<a href="%1$s" class="navigator-link navigator-link--next"><span class="navigator-link__title">' . esc_html('Next post', 'lmb') . '</span> <span class="navigator-link__text link">%2$s</span> <time datetime="%3$s" class="navigator-link__time">%4$s</time></a>';

      $next_string = sprintf(
        $next_html,
        esc_url(get_permalink($next_post->ID)),
        esc_html(get_the_title($next_post->ID)),
        esc_attr(get_the_date(DATE_W3C, $next_post->ID)),
        esc_html(get_the_date('j F Y', $next_post->ID))
      );
    };

    if (empty($prev_post) && empty($next_post)) {
      return;
    };

    $navigator_html = '<div class="navigator"><div>%1$s</div><div>%2$s</div></div>';
    $navigator_string = sprintf(
      $navigator_html,
      $prev_post ? $prev_string : esc_html(''),
      $next_post ? $next_string : esc_html('')
    );

    echo $navigator_string;

    do_action('lmb_after_the_post_navigator');
  }
};