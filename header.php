<!doctype html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div class="page">

  <header id="header" class="header <?php echo is_singular() ? esc_attr('header--absolute') : esc_attr(''); ?>">
    <div class="container container--wide">
      <div class="header__navigation">
        <?php lmb_the_logo() ?>
        <div class="header__slider">
          <?php lmb_the_navigation(array('theme_location' => 'menu-1')); ?>
        </div>
        <button class="header__hamburger hamburger-button">
          <div class="hamburger hamburger--chop">
            <div class="inner">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </div>
          </div>
        </button>
      </div>
    </div>
  </header>