<?php

if (!function_exists('lmb_the_logo')) {
  function lmb_the_logo() {
    do_action('lmb_before_the_logo');

    $home_url = home_url('/');
    $site_name = get_bloginfo('name');
    $site_description = get_bloginfo('description');

    $image_id = get_theme_mod('custom_logo');
    $image_url = $image_id ? wp_get_attachment_image_url($image_id, 'full') : '';

    $image_html = '<a href="%1$s" class="brand__link"><img src="%2$s" alt="%3$s" class="brand__icon"></a>';
    $image_string = sprintf(
      $image_html,
      esc_url($home_url),
      esc_url($image_url),
      esc_html($site_name)
    );

    $name_html = '<a href="%1$s" class="brand__name">%2$s</a>';
    $name_string = sprintf(
      $name_html,
      esc_url($home_url),
      esc_html($site_name)
    );

    $description_html = '<span class="brand__description"> / %1$s</span>';
    $description_string = sprintf(
      $description_html,
      esc_html($site_description)
    );

    $logo_html = '<div class="brand">%1$s <p class="brand__content">%2$s %3$s</p></div>';
    $logo_string = sprintf(
      $logo_html,
      $image_id ? $image_string : '',
      $name_string,
      $site_description ? $description_string : ''
    );

    echo $logo_string;

    do_action('lmb_after_the_logo');
  }
}