<article class="post">
  <section class="post-header section section--screen">
    <?php echo lmb_get_post_thumbnail(); ?>
    <div class="container">
      <div class="post-header__content snippet">
        <div class="snippet__content-lg text-weight-bold text-title-h3">
          <?php echo lmb_get_post_categories(); ?>
        </div>
        <div class="snippet__content-lg">
          <?php echo lmb_get_post_title(); ?>
        </div>
        <div class="snippet__content-lg">
          <?php echo lmb_get_post_meta(); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="content">
        <?php echo lmb_get_post_content(); ?>
      </div>
    </div>
  </section>
</article>

<?php
  if ( lmb_get_post_tags() ) {
    ?>
      <section>
        <div class="container">
          <?php echo lmb_get_post_tags(); ?>
        </div>
      </section>
    <?php
  };
?>

<?php
  if ( lmb_get_post_navigator() ) {
    ?>
      <section class="section">
        <div class="container">
          <?php echo lmb_get_post_navigator(); ?>
        </div>
      </section>
    <?php
  };
?>