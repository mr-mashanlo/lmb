<article class="post">
  <section class="post-header section section--screen">
    <?php lmb_the_post_thumbnail(); ?>
    <div class="container">
      <div class="post-header__content snippet">
        <div class="snippet__content-lg text-weight-bold text-title-h3">
          <?php lmb_the_post_categories(); ?>
        </div>
        <div class="snippet__content-lg">
          <?php lmb_the_post_title(); ?>
        </div>
        <div class="snippet__content-lg">
          <?php lmb_the_post_meta(); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="content">
        <?php lmb_the_post_content(); ?>
      </div>
    </div>
  </section>
</article>

<section>
  <div class="container">
    <?php lmb_the_post_tags(); ?>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php lmb_the_post_navigator(); ?>
  </div>
</section>