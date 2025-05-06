<?php
  get_header();
?>

<main class="main">
  <section class="section section--screen">
    <div class="container container--screen">
      <div class="banner">
        <div class="banner__content content">
          <h1>404</h1>
          <p><?php esc_html_e( 'Oops, this page not found!', 'lmb' ); ?></p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
  get_footer();