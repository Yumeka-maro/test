<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-N7H9F20X69"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-N7H9F20X69');
  </script>
</head>

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
$thanks = esc_url( home_url('/thanks/'));
$sitemap = esc_url( home_url('/sitemap/'));
?>

<body <?php body_class(); ?>>
  <!-- ヘッダー -->
  <header class="header layout-header js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo $home; ?>" class="header__link">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-white.svg" alt="ヘッダーロゴ">
        </a>
      </h1>

      <div class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo $campaign; ?>">
              <div class="pc-nav__contain">
                <p class="pc-nav__main">Campaign</p>
                <p class="pc-nav__sub">キャンペーン</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $about; ?>">
              <div class="pc-nav__contain">
                <p class="pc-nav__main">About us</p>
                <p class="pc-nav__sub">私たちについて</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $information; ?>">
              <div class="pc-nav__contain">
                <p class="pc-nav__main">Information</p>
                <p class="pc-nav__sub">ダイビング情報</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $blog; ?>">
              <div class="pc-nav__contain">
                <p class="pc-nav__main">Blog</p>
                <p class="pc-nav__sub">ブログ</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $voice; ?>">
              <div class="pc-nav__contain">
                <p class="pc-nav__main">Voice</p>
                <p class="pc-nav__sub">お客様の声</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $price; ?>">
              <div class="pc-nav__contain">
                <p class="pc-nav__main">Price</p>
                <p class="pc-nav__sub">料金一覧</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $faq; ?>">
              <div class="pc-nav__contain">
                <p class="pc-nav__main">FAQ</p>
                <p class="pc-nav__sub">よくある質問</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $contact; ?>">
              <div class="pc-nav__contain">
                <p class="pc-nav__main">Contact</p>
                <p class="pc-nav__sub">お問合せ</p>
              </div>
            </a>
          </li>
        </ul>
      </nav>

      <nav class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__inner">
          <div class="sp-nav__grid category">
            <div class="category__grid-left">
              <div class="category__item">
                <div class="category__contain">
                  <div class="category__title">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.png" alt="ヒトデアイコン"
                      class="category__hitode">
                    <a href="<?php echo $campaign; ?>" class="category__main">キャンペーン</a>
                  </div>
                  <a href="<?php echo $campaign; ?>" class="category__link">
                    <p class="category__sub">ライセンス取得</p>
                  </a>
                  <a href="<?php echo $campaign; ?>" class="category__link">
                    <p class="category__sub">貸切体験ダイビング</p>
                  </a>
                  <a href="<?php echo $campaign; ?>" class="category__link">
                    <p class="category__sub">ナイトダイビング</p>
                  </a>
                </div>
                <div class="category__contain">
                  <div class="category__title">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.png" alt="ヒトデアイコン"
                      class="category__hitode">
                    <a href="<?php echo $about; ?>" class="category__main">私たちについて</a>
                  </div>
                </div>
              </div>
              <div class="category__item">
                <div class="category__contain">
                  <div class="category__title">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.png" alt="ヒトデアイコン"
                      class="category__hitode">
                    <a href="<?php echo $information; ?>" class="category__main">ダイビング情報</a>
                  </div>
                  <a href="<?php echo $information . '?tab=license-course'; ?>" class="category__link">
                    <p class="category__sub">ライセンス講習</p>
                  </a>
                  <a href="<?php echo $information . '?tab=fan-diving'; ?>" class="category__link">
                    <p class="category__sub">ファンダイビング</p>
                  </a>
                  <a href="<?php echo $information . '?tab=experience-diving'; ?>" class="category__link">
                    <p class="category__sub">体験ダイビング</p>
                  </a>
                </div>
                <div class="category__contain">
                  <div class="category__title">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.png" alt="ヒトデアイコン"
                      class="category__hitode">
                    <a href="<?php echo $blog; ?>" class="category__main">ブログ</a>
                  </div>
                </div>
                <div class="category__contain">
                  <div class="category__title">
                    <a href="<?php echo $voice; ?>" class="category__link">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.png" alt="ヒトデアイコン"
                        class="category__hitode">
                      <p class="category__main">お客様の声</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="category__grid-right">
              <div class="category__item">
                <div class="category__contain">
                  <div class="category__title">
                    <a href="<?php echo $price; ?>" class="category__link">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.png" alt="ヒトデアイコン"
                        class="category__hitode">
                      <p class="category__main">料金一覧</p>
                    </a>
                  </div>
                  <a href="<?php echo $price; ?>" class="category__link">
                    <p class="category__sub">ライセンス講習</p>
                  </a>
                  <a href="<?php echo $price; ?>" class="category__link">
                    <p class="category__sub">体験ダイビング</p>
                  </a>
                  <a href="<?php echo $price; ?>" class="category__link">
                    <p class="category__sub">ファンダイビング</p>
                  </a>
                  <a href="<?php echo $price; ?>" class="category__link">
                    <p class="category__sub">スペシャルダイビング</p>
                  </a>
                </div>
              </div>
              <div class="category__item">
                <div class="category__contain">
                  <div class="category__title">
                    <a href="<?php echo $faq; ?>" class="category__link">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.png" alt="ヒトデアイコン"
                        class="category__hitode">
                      <p class="category__main">よくある質問</p>
                    </a>
                  </div>
                </div>
                <div class="category__contain">
                  <div class="category__title">
                    <a href="<?php echo $privacypolicy; ?>" class="category__link">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.png" alt="ヒトデアイコン"
                        class="category__hitode">
                      <p class="category__main">プライバシー<br class="u-mobile">ポリシー</p>
                    </a>
                  </div>
                </div>
                <div class="category__contain">
                  <div class="category__title">
                    <a href="<?php echo $terms; ?>" class="category__link">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.png" alt="ヒトデアイコン"
                        class="category__hitode">
                      <p class="category__main">利用規約</p>
                    </a>
                  </div>
                </div>
                <div class="category__contain">
                  <div class="category__title">
                    <a href="<?php echo $contact; ?>" class="category__link">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.png" alt="ヒトデアイコン"
                        class="category__hitode">
                      <p class="category__main">お問合せ</p>
                    </a>
                  </div>
                </div>
                <div class="category__contain">
                  <div class="category__title">
                    <a href="<?php echo $sitemap; ?>" class="category__link">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.png" alt="ヒトデアイコン"
                        class="category__hitode">
                      <p class="category__main">サイトマップ</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>

    </div>
  </header>