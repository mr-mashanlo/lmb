<header id="header" class="header section">
  <div class="header__logo">
    <?php echo lmb_get_logo() ?>
  </div>
  <div class="header__menu">
    <?php lmb_the_menu( array( 'theme_location' => 'menu-1' ) ); ?>
  </div>
  <button class="hamburger hamburger--chop header__hamburger">
    <div class="inner">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
  </button>
</header>