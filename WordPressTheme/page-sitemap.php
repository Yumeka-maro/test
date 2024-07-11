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
        <h1 class="page-mv__title">Site MAP</h1>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <div class="breadcrumb">
    <div class="inner">
      <div class="breadcrumb__text">
        <p>TOP</p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/breadcrumb.svg" alt="矢印">
        <p>サイトマップ</p>
      </div>
    </div>
  </div>

  <!-- サイトマップ -->
  <div class="sitemap layout-sitemap">
    <div class="sitemap__inner inner">
      <div class="sitemap__grid">
        <div class="sitemap__grid-left">
          <div class="category__item">
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                  class="sitemap__hitode">
                <a href="page-campaign.html" class="sitemap__main">キャンペーン</a>
              </div>
              <a href="page-contact.html" class="sitemap__link">
                <p class="sitemap__sub">ライセンス取得</p>
              </a>
              <a href="page-contact.html" class="sitemap__link">
                <p class="sitemap__sub">貸切体験ダイビング</p>
              </a>
              <a href="page-contact.html" class="sitemap__link">
                <p class="sitemap__sub">ナイトダイビング</p>
              </a>
            </div>
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                  class="sitemap__hitode">
                <a href="page-about.html" class="sitemap__main">私たちについて</a>
              </div>
            </div>
          </div>
          <div class="sitemap__item">
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                  class="sitemap__hitode">
                <a href="page-information.html" class="sitemap__main">ダイビング情報</a>
              </div>
              <a href="page-information.html?tab=license-course" class="sitemap__link">
                <p class="sitemap__sub">ライセンス講習</p>
              </a>
              <a href="page-information.html?tab=experience-diving" class="sitemap__link">
                <p class="sitemap__sub">体験ダイビング</p>
              </a>
              <a href="page-information.html?tab=fan-diving" class="sitemap__link">
                <p class="sitemap__sub">ファンダイビング</p>
              </a>
            </div>
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                  class="sitemap__hitode">
                <a href="page-blog.html" class="sitemap__main">ブログ</a>
              </div>
            </div>
          </div>
        </div>
        <div class="sitemap__grid-right">
          <div class="sitemap__item">
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <a href="page-voice.html" class="sitemap__link">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                    class="sitemap__hitode">
                  <p class="sitemap__main">お客様の声</p>
                </a>
              </div>
            </div>
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <a href="page-price.html" class="sitemap__link">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                    class="sitemap__hitode">
                  <p class="sitemap__main">料金一覧</p>
                </a>
              </div>
              <a href="page-price.html" class="sitemap__link">
                <p class="sitemap__sub">ライセンス講習</p>
              </a>
              <a href="page-price.html" class="sitemap__link">
                <p class="sitemap__sub">体験ダイビング</p>
              </a>
              <a href="page-price.html" class="sitemap__link">
                <p class="sitemap__sub">ファンダイビング</p>
              </a>
            </div>
          </div>
          <div class="sitemap__item">
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <a href="page-faq.html" class="sitemap__link">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                    class="sitemap__hitode">
                  <p class="sitemap__main">よくある質問</p>
                </a>
              </div>
            </div>
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <a href="page-privacypolicy.html" class="sitemap__link">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                    class="sitemap__hitode">
                  <p class="sitemap__main">プライバシー<br class="u-mobile">ポリシー</p>
                </a>
              </div>
            </div>
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <a href="page-terms.html" class="sitemap__link">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                    class="sitemap__hitode">
                  <p class="sitemap__main">利用規約</p>
                </a>
              </div>
            </div>
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <a href="page-contact.html" class="sitemap__link">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                    class="sitemap__hitode">
                  <p class="sitemap__main">お問合せ</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>