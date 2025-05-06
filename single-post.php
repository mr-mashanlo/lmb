<?php
  get_header();
  get_template_part( 'templates/header' );
?>

<main class="main single-post">
  <article class="post">
    <section class="post-header section section--wide section--screen">
      <?php echo lmb_get_post_thumbnail(); ?>
      <div class="container">
        <div class="post-header__category text-weight-bold text-title-h3">
          <?php echo lmb_get_post_categories(); ?>
        </div>
        <div class="post-header__title">
          <?php echo lmb_get_post_title(); ?>
        </div>
        <div class="post-header__meta">
          <?php echo lmb_get_post_meta(); ?>
        </div>
      </div>
    </section>
    <section class="section section--wide">
      <div class="container">
        <?php echo lmb_get_post_content(); ?>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <?php echo lmb_get_post_tags(); ?>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <?php echo lmb_get_post_navigator(); ?>
      </div>
    </section>
  </article>
</main>

<?php
  get_template_part( 'templates/footer' );
  get_footer();