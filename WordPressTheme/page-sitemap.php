<?php
$home = esc_url( home_url('/'));
$campaign = esc_url( home_url('/campaign/'));
$about = esc_url( home_url('/about/'));
$information = esc_url( home_url('/information/'));
$blog = esc_url( home_url('/blog/'));
$voice = esc_url( home_url('/voice/'));
$price = esc_url( home_url('/price/'));
$faq = esc_url( home_url('/faq/'));
$privacypolicy = esc_url( home_url('/privacypolicy/'));
$terms = esc_url( home_url('/terms/'));
$contact = esc_url( home_url('/contact/'));
$sitemap = esc_url( home_url('/sitemap/'));
?>

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
  <?php get_template_part('breadcrumb') ?>

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
                <a href="<?php echo $campaign; ?>" class="sitemap__main">キャンペーン</a>
              </div>
              <a href="<?php echo add_query_arg('term', 'license-course_category', get_post_type_archive_link('campaign')); ?>"
                class="sitemap__link">
                <p class="sitemap__sub">ライセンス取得</p>
              </a>
              <a href="<?php echo add_query_arg('term', 'experience-diving_category', get_post_type_archive_link('campaign')); ?>"
                class="sitemap__link">
                <p class="sitemap__sub">貸切体験ダイビング</p>
              </a>
              <a href="<?php echo add_query_arg('term', 'fan-diving_category', get_post_type_archive_link('campaign')); ?>"
                class="sitemap__link">
                <p class="sitemap__sub">ナイトダイビング</p>
              </a>
            </div>
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                  class="sitemap__hitode">
                <a href="<?php echo $about; ?>" class="sitemap__main">私たちについて</a>
              </div>
            </div>
          </div>
          <div class="sitemap__item">
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                  class="sitemap__hitode">
                <a href="<?php echo $information; ?>" class="sitemap__main">ダイビング情報</a>
              </div>
              <a href="<?php echo $information . '?tab=license-course'; ?>" class="sitemap__link">
                <p class="sitemap__sub">ライセンス講習</p>
              </a>
              <a href="<?php echo $information . '?tab=fan-diving'; ?>" class="sitemap__link">
                <p class="sitemap__sub">ファンダイビング</p>
              </a>
              <a href="<?php echo $information . '?tab=experience-diving'; ?>" class="sitemap__link">
                <p class="sitemap__sub">体験ダイビング</p>
              </a>
            </div>
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                  class="sitemap__hitode">
                <a href="<?php echo $blog; ?>" class="sitemap__main">ブログ</a>
              </div>
            </div>
          </div>
        </div>
        <div class="sitemap__grid-right">
          <div class="sitemap__item">
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <a href="<?php echo $voice; ?>" class="sitemap__link">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                    class="sitemap__hitode">
                  <p class="sitemap__main">お客様の声</p>
                </a>
              </div>
            </div>
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <a href="<?php echo $price; ?>" class="sitemap__link">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                    class="sitemap__hitode">
                  <p class="sitemap__main">料金一覧</p>
                </a>
              </div>
              <a href="<?php echo $price; ?>" class="sitemap__link">
                <p class="sitemap__sub">ライセンス講習</p>
              </a>
              <a href="<?php echo $price; ?>" class="sitemap__link">
                <p class="sitemap__sub">体験ダイビング</p>
              </a>
              <a href="<?php echo $price; ?>" class="sitemap__link">
                <p class="sitemap__sub">ファンダイビング</p>
              </a>
              <a href="<?php echo $price; ?>" class="sitemap__link">
                <p class="sitemap__sub">スペシャルダイビング</p>
              </a>
            </div>
          </div>
          <div class="sitemap__item">
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <a href="<?php echo $faq; ?>" class="sitemap__link">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                    class="sitemap__hitode">
                  <p class="sitemap__main">よくある質問</p>
                </a>
              </div>
            </div>
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <a href="<?php echo $privacypolicy; ?>" class="sitemap__link">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                    class="sitemap__hitode">
                  <p class="sitemap__main">プライバシー<br class="u-mobile">ポリシー</p>
                </a>
              </div>
            </div>
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <a href="<?php echo $terms; ?>" class="sitemap__link">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode-black.png" alt="ヒトデアイコン"
                    class="sitemap__hitode">
                  <p class="sitemap__main">利用規約</p>
                </a>
              </div>
            </div>
            <div class="sitemap__contain">
              <div class="sitemap__title">
                <a href="<?php echo $contact; ?>" class="sitemap__link">
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