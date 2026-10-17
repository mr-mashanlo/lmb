<?php
  get_header();
  get_template_part( 'templates/header' );
?>

<main class="main">
  <section class="section">
    <?php lmb_the_posts(); ?>
  </section>
  <section class="section">
    <?php echo lmb_get_navigator(); ?>
  </section>
</main>

<?php
  get_template_part( 'templates/footer' );
  get_footer();