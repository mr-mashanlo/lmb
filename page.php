<?php
  get_header();
  get_template_part( 'templates/header' );
?>

<main class="main">
  <section class="section">
    <?php lmb_the_post(); ?>
  </section>
  <?php
    if ( lmb_get_navigator() ) {
      ?>
        <section class="section">
          <?php echo lmb_get_navigator(); ?>
        </section>
      <?php
    }
  ?>
</main>

<?php
  get_template_part( 'templates/footer' );
  get_footer();