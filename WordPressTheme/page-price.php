<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/priceTop-sp.jpg"
            media="(max-width: 767px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/priceTop-pc.jpg"
            alt="ターコイズブルーの海でダイビングしている様子">
        </picture>
        <h1 class="page-mv__title">Price</h1>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('breadcrumb') ?>


  <!-- 料金一覧 -->
  <div class="page-price layout-page-price">
    <div class="page-price__inner inner">
      <ul class="page-price__lists lists">
        <?php
          $price = SCF::get('price_group');
          foreach ($price as $charts) {
            $category_slug = sanitize_title($charts['category']);
        ?>
        <li class="list">
          <div class="list__main">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/whale-white.svg" alt="白鯨"
              class="list__img">
            <h2 class="list__title"><?php echo $charts['category']; ?></h2>
          </div>
          <dl class="list__inner">
            <div class="list__name">
              <dt><?php echo $charts['name_1']; ?></dt>
            </div>
            <div class="list__cost">
              <dd><?php echo $charts['price_1']; ?></dd>
            </div>
            <div class="list__name">
              <dt><?php echo $charts['name_2']; ?></dt>
            </div>
            <div class="list__cost">
              <dd><?php echo $charts['price_2']; ?></dd>
            </div>
            <div class="list__name">
              <dt><?php echo $charts['name_3']; ?></dt>
            </div>
            <div class="list__cost">
              <dd><?php echo $charts['price_3']; ?></dd>
            </div>
          </dl>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>

  <?php get_footer(); ?>