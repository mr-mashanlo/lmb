  <footer id="footer" class="footer">
    <div class="container">
      <?php the_custom_logo(); ?>
      <nav>
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-2',
            )
          );
        ?>
      </nav>
    </div>
  </footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
