<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutusTop-sp.jpg"
            media="(max-width: 767px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutusTop-pc.jpg" alt="青い空とシーサー">
        </picture>
        <h1 class="page-mv__title">About us</h1>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('breadcrumb') ?>

  <!-- アバウト -->
  <section class="page-about layout-page-about">
    <div class="page-about__inner inner">
      <div class="page-about__contents">
        <div class="page-about__img-wrapper">
          <div class="page-about__img01">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about01.jpg" alt="屋根の上のシーサー">
          </div>
          <div class="page-about__img02">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about02.jpg" alt="海の中の熱帯魚">
          </div>
        </div>
        <h3 class="page-about__title">Dive into <br>the Ocean</h3>
        <p class="page-about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
      </div>
    </div>
  </section>

  <!-- ギャラリー -->
  <section class="gallery layout-gallery">
    <div class="gallery__inner inner">
      <div class="gallery__title section-header">
        <p class="section-header__en-title">Gallery</p>
        <h2 class="section-header__ja-title">フォト</h2>
      </div>
      <div class="gallery__contents">
        <?php
          $gallery = SCF::get('gallery_group');
          foreach ($gallery as $images) {
            $image = wp_get_attachment_image_src($images['gallery_img'] , 'full');
        ?>
        <img src="<?php echo $image[0]; ?>" alt="ギャラリー画像" class="gallery__img js-gallery">
        <?php } ?>
      </div>
    </div>
    <div id="grayDisplay"></div>
  </section>

  <?php get_footer(); ?>