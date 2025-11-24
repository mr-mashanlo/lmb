<?php
  get_header();
  get_template_part( 'templates/header' );
?>

<main class="main">
  <section class="section">
    <article class="archive">
      <?php echo lmb_get_archive_title(); ?>
      <?php echo lmb_get_archive_content(); ?>
    </article>
  </section>
  <section class="section">
    <?php lmb_the_posts(); ?>
  </section>
</main>

<?php
  get_template_part( 'templates/footer' );
  get_footer();