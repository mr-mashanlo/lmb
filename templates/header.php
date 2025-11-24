<header id="header" class="header">
  <div class="header__navigation">
    <?php echo lmb_get_logo() ?>
    <div class="header__slider">
      <?php lmb_the_menu( array( 'theme_location' => 'menu-1' ) ); ?>
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
</header>