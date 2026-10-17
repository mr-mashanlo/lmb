<?php
  get_header();
  get_template_part( 'templates/header' );
?>

<main class="main single-post">

  <section class="section">
    <article class="post">
      <div class="post__meta">
        <?php echo lmb_get_post_meta(); ?>
      </div>
      <?php echo lmb_get_post_title(); ?>
      <div class="post__categories">
        <?php echo lmb_get_post_categories(); ?>
      </div>
      <div class="post__content">
        <?php echo lmb_get_post_content(); ?>
      </div>
      <div class="post__tags">
        <?php echo lmb_get_post_tags(); ?>
      </div>
    </article>
  </section>

  <?php
    if ( lmb_get_post_navigator() ) {
      ?>
        <section class="section">
          <?php echo lmb_get_post_navigator(); ?>
        </section>
      <?php
    }
  ?>

</main>

<?php
  get_template_part( 'templates/footer' );
  get_footer();