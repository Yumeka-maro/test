<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="mv">
    <div class="mv loader">
      <div class="loader__line">
        <div class="mv__title-wrap loader__text--loading">
          <h2 class="mv__title mv__title--loading1">DIV</h2>
          <!-- <p class="mv__title-sub mv__title-sub--loading1">into&nbsp;the</p> -->
        </div>
      </div>
      <div class="loader__line">
        <div class="mv__title-wrap loader__text--loading">
          <h2 class="mv__title mv__title--loading2">ING</h2>
          <!-- <p class="mv__title-sub mv__title-sub--loading2">&nbsp;ocean</p> -->
        </div>
      </div>
    </div>
    <div class="mv__inner">
      <div class="mv__title-wrap">
        <p class="mv__title">DIVING</p>
        <p class="mv__title-sub">into the ocean</p>
      </div>
      <div class="swiper mv__swiper js-mv-swiper">
        <div class="swiper-wrapper">
          <?php
          $slideItems = SCF::get('swiper_group');

          foreach ($slideItems as $item) {
            $sp_image = $item['sp_img'];
            $pc_image = $item['pc_img'];

            if ($sp_image && $pc_image) {
              $sp_image_url = wp_get_attachment_image_src($sp_image, 'full')[0];
              $pc_image_url = wp_get_attachment_image_src($pc_image, 'full')[0];

              echo '<div class="swiper-slide">';
              echo '<picture>';
              echo '<source srcset="' . esc_url($sp_image_url) . '" media="(max-width: 767px)" />';
              echo '<img src="' . esc_url($pc_image_url) . '" alt="スライド画像">';
              echo '</picture>';
              echo '</div>';
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>


  <!-- キャンペーン -->
  <section class="campaign layout-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__title section-header">
        <p class="section-header__en-title">Campaign</p>
        <h2 class="section-header__ja-title">キャンペーン</h2>
      </div>
      <div class="campaign__wrapper">
        <div class="swiper campaign__swiper js-campaign-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide campaign-card">
              <div class="campaign-card__inner">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.png"
                    alt="ターコイズブルーの海の中で蛍光色の魚たちが泳いでいる様子">
                </div>
                <div class="campaign-card__body">
                  <p class="campaign-card__tag">ライセンス講習</p>
                  <p class="campaign-card__title">ライセンス取得</p>
                  <div class="campaign-card__sub">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <div class="campaign-card__discount">¥56,000</div>
                      <div class="campaign-card__cost">¥46,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide campaign-card">
              <div class="campaign-card__inner">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.png"
                    alt="ターコイズブルーの浜辺と両脇に船がある様子">
                </div>
                <div class="campaign-card__body">
                  <p class="campaign-card__tag">体験ダイビング</p>
                  <p class="campaign-card__title">貸切体験ダイビング</p>
                  <div class="campaign-card__sub">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <div class="campaign-card__discount">¥24,000</div>
                      <div class="campaign-card__cost">¥18,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide campaign-card">
              <div class="campaign-card__inner">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.png"
                    alt="藍色の海の中で白いクラゲが泳いでいる様子">
                </div>
                <div class="campaign-card__body">
                  <p class="campaign-card__tag">体験ダイビング</p>
                  <p class="campaign-card__title">ナイトダイビング</p>
                  <div class="campaign-card__sub">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <div class="campaign-card__discount">¥10,000</div>
                      <div class="campaign-card__cost">¥8,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide campaign-card">
              <div class="campaign-card__inner">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4.png"
                    alt="青い空と青い海の中でダイビングしている様子">
                </div>
                <div class="campaign-card__body">
                  <p class="campaign-card__tag">ファンダイビング</p>
                  <p class="campaign-card__title">貸切ファンダイビング</p>
                  <div class="campaign-card__sub">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <div class="campaign-card__discount">¥20,000</div>
                      <div class="campaign-card__cost">¥16,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper__controll u-desktop">
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
      <div class="campaign__button"><a href="page-campaign.html" class="button">View more<span></span></a></div>
    </div>
  </section>

  <!-- アバウト -->
  <section class="about layout-about">
    <div class="about__inner inner">
      <div class="about__title section-header">
        <p class="section-header__en-title">About us</p>
        <h2 class="section-header__ja-title">私たちについて</h2>
      </div>
      <div class="about__contents">
        <div class="about__img-wrapper">
          <div class="about__img01">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about01.jpg" alt="屋根の上のシーサー">
          </div>
          <div class="about__img02">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about02.jpg" alt="海の中の熱帯魚">
          </div>
        </div>
        <div class="about__text-wrapper">
          <h3 class="about__text-title">Dive into <br>the Ocean</h3>
          <div class="about__text">
            <p class="about__sub">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
            <div class="about__button"><a href="page-about.html" class="button">View more<span></span></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- インフォメーション -->
  <section class="information layout-information">
    <div class="information__inner inner">
      <div class="information__title section-header">
        <p class="section-header__en-title">Information</p>
        <h2 class="section-header__ja-title">ダイビング情報</h2>
      </div>
      <div class="information__contents">
        <div class="information__img colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information.jpg" alt="海の中の熱帯魚とサンゴ">
        </div>
        <div class="information__text-wrapper">
          <h3 class="information__text-title">ライセンス講習</h3>
          <div class="information__text">
            <p class="information__sub">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
              正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
            <div class="information__button"><a href="page-information.html" class="button">View more<span></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ブログ -->
  <section class="blog layout-blog">
    <div class="blog__inner inner">
      <div class="blog__title section-header">
        <p class="section-header__en-title section-header__en-title--white">Blog</p>
        <h2 class="section-header__ja-title section-header__en-title--white">ブログ</h2>
      </div>
      <div class="blog__contents blog-cards">
        <a href="page-blog.html" class="blog-cards__item blog-card">
          <div class="blog-card__inner">
            <div class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog1.png" alt="赤いサンゴ礁の写真">
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="2023-11-17">2023.11.17</time>
              <p class="blog-card__title">ライセンス取得</p>
              <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </div>
          </div>
        </a>
        <a href="page-blog.html" class="blog-cards__item blog-card">
          <div class="blog-card__inner">
            <div class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog2.png" alt="ウミガメの写真">
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="2023-11-17">2023.11.17</time>
              <p class="blog-card__title">ウミガメと泳ぐ</p>
              <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </div>
          </div>
        </a>
        <a href="page-blog.html" class="blog-cards__item blog-card">
          <div class="blog-card__inner">
            <div class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog3.png" alt="イソギンチャクの中のクマノミの写真">
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="2023-11-17">2023.11.17</time>
              <p class="blog-card__title">カクレクマノミ</p>
              <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </div>
          </div>
        </a>
      </div>
      <div class="blog__button"><a href="page-blog.html" class="button">View more<span></span></a></div>
    </div>
  </section>

  <!-- ボイス -->
  <section class="voice layout-voice">
    <div class="voice__inner inner">
      <div class="voice__title section-header">
        <p class="section-header__en-title">Voice</p>
        <h2 class="section-header__ja-title">お客様の声</h2>
      </div>
      <div class="voice__contents voice-cards">
        <a href="page-voice.html" class="voice-cards__item voice-card">
          <div class="voice-card__inner">
            <div class="voice-card__title-wrap">
              <div class="voice-card__title-sub">
                <div class="voice-card__sub-contain">
                  <p class="voice-card__old">20代(女性)</p>
                  <div class="voice-card__tag">ライセンス講習</div>
                </div>
                <div class="voice-card__title-main">ここにタイトルが入ります。ここにタイトル</div>
              </div>
              <div class="voice-card__img colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice1.jpg" alt="帽子を被った女の人">
              </div>
            </div>
            <div class="voice-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
            </div>
          </div>
        </a>
        <a href="page-voice.html" class="voice-cards__item voice-card">
          <div class="voice-card__inner">
            <div class="voice-card__title-wrap">
              <div class="voice-card__title-sub">
                <div class="voice-card__sub-contain">
                  <p class="voice-card__old">20代(男性)</p>
                  <div class="voice-card__tag">ライセンス講習</div>
                </div>
                <div class="voice-card__title-main">ここにタイトルが入ります。ここにタイトル</div>
              </div>
              <div class="voice-card__img colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice2.jpg" alt="親指を立てている笑顔の男の人">
              </div>
            </div>
            <div class="voice-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
            </div>
          </div>
        </a>
      </div>
      <div class="voice__button"><a href="page-voice.html" class="button">View more<span></span></a></div>
    </div>
  </section>

  <!-- プライス -->
  <section class="price layout-price">
    <div class="price__inner inner">
      <div class="price__title section-header">
        <p class="section-header__en-title">Price</p>
        <h2 class="section-header__ja-title">料金一覧</h2>
      </div>
      <div class="price__contents">
        <div class="price__img colorbox">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price.jpg"
              media="(max-width: 767px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.png"
              alt="ターコイズブルーの海の中でサンゴ礁とたくさんの魚が泳いでいる様子">
          </picture>
        </div>
        <div class="price__text">
          <?php
              $price = SCF::get('price_group',11);
              foreach ($price as $charts) {
            ?>
          <ul class="price__lists">
            <li class="price__lists-item">
              <h3 class="price__list-title"><?php echo $charts['category']; ?></h3>
              <dl class="price__list-inner">
                <dt><?php echo $charts['name_1']; ?></dt>
                <dd><?php echo $charts['price_1']; ?></dd>
                <dt><?php echo $charts['name_2']; ?></dt>
                <dd><?php echo $charts['price_2']; ?></dd>
                <dt><?php echo $charts['name_3']; ?></dt>
                <dd><?php echo $charts['price_3']; ?></dd>
              </dl>
            </li>
          </ul>
          <?php } ?>
        </div>
      </div>
      <div class="price__button"><a href="page-price.html" class="button">View more<span></span></a></div>
    </div>
  </section>


  <?php get_footer(); ?>