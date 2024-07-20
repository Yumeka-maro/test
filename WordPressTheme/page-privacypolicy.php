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
        <h1 class="page-mv__title">Privacy Policy</h1>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('breadcrumb') ?>

  <!-- プライバシポリシー -->
  <div class="privacypolicy layout-privacypolicy">
    <div class="privacypolicy__inner inner">
      <div class="privacypolicy__title"><?php the_title(); ?></div>
      <div class="privacypolicy__wrapper">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  </div>
  <?php get_footer(); ?>