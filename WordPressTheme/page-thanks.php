<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contactTop-sp.jpg"
            media="(max-width: 767px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contactTop-pc.jpg"
            alt="ターコイズブルーの浜辺を空から撮った様子">
        </picture>
        <h1 class="page-mv__title">Contact</h1>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('breadcrumb') ?>

  <!-- サンクスページ -->
  <div class="thanks layout-thanks">
    <div class="thanks__inner inner">
      <div class="thanks__contents">
        <p class="thanks__text">お問い合わせ内容を送信完了しました。</p>
        <div class="thanks__text-wrapper">
          <p class="thanks__text">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。</p>
          <p class="thanks__text">お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。</p>
          <p class="thanks__text">また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。</p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>