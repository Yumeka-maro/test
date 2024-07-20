<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemapTop-sp.jpg"
            media="(max-width: 767px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemapTop-pc.jpg"
            alt="ターコイズブルーの海の中で魚が泳いでいる様子">
        </picture>
        <h1 class="page-mv__title">Terms of Service</h1>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('breadcrumb') ?>

  <!-- 利用規約 -->
  <div class="terms layout-terms">
    <div class="terms__inner inner">
      <div class="terms__title">利用規約</div>
      <div class="terms__wrapper">
        <?php the_content(); ?>
      </div>
    </div>
    <?php get_footer(); ?>