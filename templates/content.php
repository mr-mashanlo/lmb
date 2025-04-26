<article class="post">
  <?php echo lmb_get_post_title(); ?>
  <div class="post__meta">
    <?php echo lmb_get_post_meta(); ?>
  </div>
  <div class="<?php echo is_singular() ? esc_attr( 'post__content' ) : esc_attr( 'post__excerpt' ); ?>">
    <?php echo lmb_get_post_content(); ?>
  </div>
</article>