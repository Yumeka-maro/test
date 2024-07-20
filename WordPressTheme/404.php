<?php get_header(); ?>
<main>
  <!-- 404 -->
  <div class="page-404 layout-page-404">
    <div class="page-404__inner inner">
      <!-- パンくず -->
      <?php get_template_part('breadcrumb') ?>
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/whale.svg" alt="鯨" class="page-404__img">

      <div class="page-404__title">404</div>
      <div class="page-404__text">申し訳ありません。<br>お探しのページが見つかりません。</div>
      <div class="page-404__button"><a href="<?php echo esc_url(home_url('/')); ?>" class="button-white">Page
          TOP<span></span></a></div>

    </div>
  </div>
</main>

<?php get_footer(); ?>