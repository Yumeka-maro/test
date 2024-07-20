<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/informationTop-sp.jpg"
            media="(max-width: 767px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/informationTop-pc.jpg"
            alt="青い海の中でダイビングしている人とサンゴ礁とオレンジ色の魚の様子">
        </picture>
        <h1 class="page-mv__title">Information</h1>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('breadcrumb') ?>

  <!-- インフォメーション -->
  <section class="page-information layout-page-information">
    <div class="page-information__inner inner">
      <div class="page-information__tab tab">
        <div class="tab__list">
          <button class="tab__button js-tab-button is-action license-course" id="license-course"><span></span>ライセンス<br
              class="u-mobile">講習</button>
          <button class="tab__button js-tab-button fan-diving" id="fan-diving"><span></span>ファン<br
              class="u-mobile">ダイビング</button>
          <button class="tab__button js-tab-button experience-diving" id="experience-diving"><span></span>体験<br
              class="u-mobile">ダイビング</button>
        </div>
        <div class="tab__contents">
          <div class="tab__content js-tab-content is-action license-course-content">
            <div class="tab__text-wrapper">
              <h3 class="tab__title">ライセンス講習</h3>
              <p class="tab__text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
            <div class="tab__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/tab1.jpg"
                alt="ライセンス"></div>
          </div>
          <div class="tab__content js-tab-content fan-diving-content">
            <div class="tab__text-wrapper">
              <h3 class="tab__title">ファンダイビング</h3>
              <p class="tab__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
            </div>
            <div class="tab__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/tab2.jpg"
                alt="ファンダイビング"></div>
          </div>
          <div class="tab__content js-tab-content experience-diving-content">
            <div class="tab__text-wrapper">
              <h3 class="tab__title">体験ダイビング</h3>
              <p class="tab__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
            </div>
            <div class="tab__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/tab3.jpg"
                alt="ダイビング"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>