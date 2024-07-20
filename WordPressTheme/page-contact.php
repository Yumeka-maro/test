<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contactTop-sp.jpg"
            media="(max-width: 767px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contactTop-pc.jpg"
            alt="ターコイズブルーの浜辺を空から撮った様子">
        </picture>
        <h1 class="page-mv__title">Contact</h1>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('breadcrumb') ?>

  <!-- お問い合わせページ -->
  <div class="page-contact layout-page-contact">
    <div class="page-contact__inner inner">
      <div class="page-contact__contents">
        <?php echo do_shortcode('[contact-form-7 id="9b3a0b8" title="お問合せ"]'); ?>
      </div>
    </div>
  </div>
  </div>
  </div>


</main>

<?php get_footer(); ?>