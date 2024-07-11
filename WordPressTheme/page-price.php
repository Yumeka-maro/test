<?php get_header(); ?>

<main>
        <!-- メインビュー -->
        <div class="page-mv">
                <div class="page-mv__inner">
                    <div class="page-mv__img">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/priceTop-sp.jpg" media="(max-width: 767px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/priceTop-pc.jpg" alt="ターコイズブルーの海でダイビングしている様子">
                        </picture>
                        <h1 class="page-mv__title">Price</h1>
                    </div>
                </div>
        </div>

        <!-- パンくず -->
        <div class="breadcrumb">
                <div class="inner">
                    <div class="breadcrumb__text"><p>TOP</p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/breadcrumb.svg" alt="矢印"><p>料金一覧</p></div>
                </div>
        </div>

        <!-- 料金一覧 -->
        <div class="page-price layout-page-price">
            <div class="page-price__inner inner">
                <ul class="page-price__lists lists">
                    <li class="list">
                        <div class="list__main">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/whale-white.svg" alt="白鯨" class="list__img">
                            <h2 class="list__title">ライセンス講習</h2>
                        </div>
                        <dl class="list__inner">
                            <div class="list__name"><dt>オープンウォーター<br class="u-mobile">ダイバーコース</dt></div>
                            <div class="list__cost"><dd>¥50,000</dd></div>
                            <div class="list__name"><dt>アドバンスド<br class="u-mobile">オープンウォーターコース</dt></div>
                            <div class="list__cost"><dd>¥60,000</dd></div>
                            <div class="list__name"><dt>レスキュー＋EFRコース</dt></div>
                            <div class="list__cost"><dd>¥70,000</dd></div>
                        </dl>
                    </li>
                    <li class="list">
                        <div class="list__main">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/whale-white.svg" alt="白鯨" class="list__img">
                            <h2 class="list__title">体験ダイビング</h2>
                        </div>
                        <dl class="list__inner">
                            <div class="list__name"><dt>ビーチ体験ダイビング<br class="u-mobile">(半日)</dt></div>
                            <div class="list__cost"><dd>¥7,000</dd></div>
                            <div class="list__name"><dt>ビーチ体験ダイビング<br class="u-mobile">(1日)</dt></div>
                            <div class="list__cost"><dd>¥14,000</dd></div>
                            <div class="list__name"><dt>ボート体験ダイビング<br class="u-mobile">(半日)</dt></div>
                            <div class="list__cost"><dd>¥10,000</dd></div>
                            <div class="list__name"><dt>ボート体験ダイビング<br class="u-mobile">(1日)</dt></div>
                            <div class="list__cost"><dd>¥18,000</dd></div>
                        </dl>
                    </li>
                    <li class="list">
                        <div class="list__main">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/whale-white.svg" alt="白鯨" class="list__img">
                            <h2 class="list__title">ファンダイビング</h2>
                        </div>
                        <dl class="list__inner">
                          <div class="list__name"><dt>ビーチダイビング<br class="u-mobile">(2ダイブ)</dt></div>
                          <div class="list__cost"><dd>¥14,000</dd></div>
                          <div class="list__name"><dt>ボートダイビング<br class="u-mobile">(2ダイブ)</dt></div>
                          <div class="list__cost"><dd>¥18,000</dd></div>
                          <div class="list__name"><dt>スペシャルダイビング<br class="u-mobile">(2ダイブ)</dt></div>
                          <div class="list__cost"><dd>¥24,000</dd></div>
                          <div class="list__name"><dt>ナイトダイビング<br class="u-mobile">(1ダイブ)</dt></div>
                          <div class="list__cost"><dd>¥10,000</dd></div>
                        </dl>
                    </li>
                    <li class="list">
                        <div class="list__main">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/whale-white.svg" alt="白鯨" class="list__img">
                            <h2 class="list__title">スペシャルダイビング</h2>
                        </div>
                        <dl class="list__inner">
                          <div class="list__name"><dt>貸切ダイビング<br class="u-mobile">(2ダイブ)</dt></div>
                          <div class="list__cost"><dd>¥24,000</dd></div>
                          <div class="list__name"><dt>1日ダイビング<br class="u-mobile">(3ダイブ)</dt></div>
                          <div class="list__cost"><dd>¥32,000</dd></div>
                          <div class="list__name"><dt>ナイトダイビング<br class="u-mobile">(2ダイブ)</dt></div>
                          <div class="list__cost"><dd>¥14,000</dd></div>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>

<?php get_footer(); ?>

