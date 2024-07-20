<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faqTop-sp.jpg"
            media="(max-width: 767px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faqTop-pc.jpg" alt="ターコイズブルーの海と浜辺と青い空">
        </picture>
        <h1 class="page-mv__title">FAQ</h1>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('breadcrumb') ?>

  <!-- よくある質問 -->
  <div class="page-faq layout-page-faq">
    <div class="page-faq__inner inner">
      <div class="page-faq__accordion accordion">
        <?php
          $faqs = SCF::get('faq_group');
          foreach ($faqs as $fields) {
        ?>
        <div class="accordion__item">
          <div class="accordion__title js-accordion-title">
            <p class="accordion__title-text"><?php echo $fields['question']; ?></p>
          </div>
          <div class="accordion__content">
            <p class="accordion__text">
              <?php echo nl2br($fields['answer']); ?>
            </p>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>