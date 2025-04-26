<?php
  get_header();
  get_template_part( 'templates/header' );
?>

<main class="main">
  <section class="section">
    <div class="container">
      <?php lmb_the_posts(); ?>
    </div>
  </section>
</main>

<?php
  get_template_part( 'templates/footer' );
  get_footer();