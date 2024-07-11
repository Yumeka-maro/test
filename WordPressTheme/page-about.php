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
  <div class="breadcrumb">
    <div class="inner">
      <div class="breadcrumb__text">
        <p>TOP</p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/breadcrumb.svg" alt="矢印">
        <p>私たちについて</p>
      </div>
    </div>
  </div>

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
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery1.jpg"
          alt="ターコイズブルーの海の中でサンゴ礁とたくさんの魚が泳いでいる様子" class="gallery__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery2.jpg" alt="ターコイズブルーの浜辺と両脇に船がある様子"
          class="gallery__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery3.jpg"
          alt="海の中で青色とオレンジ色の模様の魚が２尾泳いでいる様子" class="gallery__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery4.jpg" alt="黄色い魚が泳いでいる様子"
          class="gallery__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery5.jpg" alt="青い海と大量の魚が泳いでいる様子"
          class="gallery__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery6.jpg"
          alt="海の中でサンゴ礁の近くでオレンジ色の魚が泳いでいる様子" class="gallery__img">
      </div>
    </div>
    <div id="grayDisplay"></div>
  </section>

  <?php get_footer(); ?>