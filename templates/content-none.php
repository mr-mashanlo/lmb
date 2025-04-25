<section class="section">
  <div class="container">
    <?php
      if ( is_search() ) {
        ?>
          <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'lmb' ); ?></p>
        <?php
      } else {
        ?>
          <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'lmb' ); ?></p>
        <?php
      }
    ?>
  </div>
</section>
