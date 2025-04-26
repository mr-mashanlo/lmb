<?php
  get_header();
  get_template_part( 'templates/header' );
?>

<main class="main single-post">
  <?php lmb_the_post(); ?>
</main>

<?php
  get_template_part( 'templates/footer' );
  get_footer();