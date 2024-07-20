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

<!-- コンタクト -->
<?php if (!is_page(array('contact', 'thanks')) && !is_404()) : ?>
<section class="contact layout-contact">
  <div class="contact__inner inner">
    <div class="contact__contents">
      <div class="contact__map">
        <h3 class="contact__logo-wrap"><img
            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-green.svg" class="contact__logo"
            alt="ロゴ"></h3>
        <div class="contact__text-wrap">
          <div class="contact__text">
            <p>沖縄県那覇市1-1</p>
            <p>TEL:0120-000-0000</p>
            <p>営業時間:8:30-19:00</p>
            <p>定休日:毎週火曜日</p>
          </div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57272.98530030893!2d127.64350223082273!3d26.21093643736236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1714199998793!5m2!1sja!2sjp"
            width="295" height="160" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="contact__title-wrap">
        <div class="contact__title section-header">
          <p class="section-header__en-title section-header__en-title--large">Contact</p>
          <h2 class="section-header__ja-title section-header__ja-title--sub1">お問合せ</h2>
          <p class="section-header__ja-title section-header__ja-title--sub2">ご予約・お問合せはコチラ</p>
          <div class="contact__button"><a href="<?php echo $contact; ?>" class="button">Contact us<span></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>


</main>
<!-- フッター -->
<footer class="footer layout-footer">
  <div class=" footer__inner inner">
    <div class="footer__header">
      <div class="footer__logo">
        <a href="<?php echo $home; ?>" class="footer__link">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-white.svg" alt="フッターロゴ">
        </a>
      </div>
      <div class="footer__sns">
        <a href="https://www.facebook.com" class="footer__sns--facebook" target="_blank"><img
            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.png" alt="フェイスブック"></a>
        <a href="https://www.instagram.com" class="footer__sns--instagram" target="_blank"><img
            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/InstagramLogo.png" alt="インスタグラム"></a>
      </div>
    </div>
    <div class="footer__grid category">
      <div class="category__grid-left">
        <div class="category__item">
          <div class="category__contain">
            <div class="category__title">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/hitode.png" alt="ヒトデアイコン"
                class="category__hitode">
              <a href="<?php echo $campaign; ?>" class="category__main">キャンペーン</a>
            </div>
            <a href="<?php echo add_query_arg('term', 'license-course_category', get_post_type_archive_link('campaign')); ?>"
              class="category__link">
              <p class="category__sub">ライセンス取得</p>
            </a>
            <a href="<?php echo add_query_arg('term', 'experience-diving_category', get_post_type_archive_link('campaign')); ?>"
              class="category__link">
              <p class="category__sub">貸切体験ダイビング</p>
            </a>
            <a href="<?php echo add_query_arg('term', 'fan-diving_category', get_post_type_archive_link('campaign')); ?>"
              class="category__link">
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
    <div class="footer__copyright">
      <small>Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
    </div>
  </div>
</footer>
<a href="#" class="back-to-top js-to-top"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/arrow.png"
    alt="矢印" class="arrow__img"></a>
<?php wp_footer(); ?>
</body>

</html>