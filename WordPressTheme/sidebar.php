<aside class="page-blog__aside aside">
  <div class="aside__content">
    <div class="aside__caption caption">
      <div class="caption__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/whale-black.svg"
          alt="黒鯨"></div>
      <h2 class="caption__text">人気記事</h2>
    </div>
    <div class="aside__article aside-article">
      <?php
            $args = array(
              'post_type' => 'news',
              'posts_per_page' => 3,
              'orderby' => 'meta_value_num',
              'meta_key' => 'post_views_count',
              'order' => 'DESC'
            );
            $the_query = new WP_Query($args);
            ?>
      <?php if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="aside-article__inner">
        <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像"
          class="aside-article__img">
        <?php endif; ?>
        <div class="aside-article__text">
          <time class="detail__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
          <h3 class="aside-article__text"><?php the_title(); ?></h3>
        </div>
      </a>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>

  </div>
  <div class="aside__content">
    <div class="aside__caption caption">
      <div class="caption__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/whale-black.svg"
          alt="黒鯨"></div>
      <h2 class="caption__text">口コミ</h2>
    </div>
    <div class="aside__voice aside-voice">
      <div class="aside-voice__inner">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/review.jpg" alt="カップルの写真"
          class="aside-voice__img">
        <p class="aside-voice__age">30代(カップル)</p>
        <p class="aside-voice__title">ここにタイトルが入ります。ここにタイトル</p>
        <div class="aside__button"><a href="page-voice.html" class="button">View more<span></span></a></div>
      </div>
    </div>
  </div>
  <div class="aside__content">
    <div class="aside__caption caption">
      <div class="caption__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/whale-black.svg"
          alt="黒鯨"></div>
      <h2 class="caption__text">キャンペーン</h2>
    </div>
    <div class="aside__campaign">
      <div class="aside__cards aside-cards">
        <?php
            $args = array(
              'post_type' => 'news',
              'posts_per_page' => 2,
              'orderby' => 'meta_value_num',
              'meta_key' => 'post_views_count',
              'order' => 'DESC'
            );
            $the_query = new WP_Query($args);
            ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="aside__card aside-card">
          <div class="aside-card__inner">
            <div class="aside-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.png"
                alt="ターコイズブルーの海の中で蛍光色の魚たちが泳いでいる様子">
            </div>
            <div class="aside-card__body">
              <p class="aside-card__title">ライセンス取得</p>
              <div class="aside-card__sub">
                <p class="aside-card__text">全部コミコミ(お一人様)</p>
                <div class="aside-card__price">
                  <div class="aside-card__discount">¥56,000</div>
                  <div class="aside-card__cost">¥46,000</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="aside__button"><a href="page-campaign.html" class="button">View more<span></span></a></div>
  </div>
  <div class="aside__content">
    <div class="aside__caption caption">
      <div class="caption__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/whale-black.svg"
          alt="黒鯨"></div>
      <h2 class="caption__text">アーカイブ</h2>
    </div>
    <div class="aside__toggle toggle">
      <div class="toggle__header js-toggle">
        <div class="toggle__triangle"></div>2023
      </div>
      <div class="toggle__content">
        <a href="#" class="toggle__inner">
          <div class="toggle__triangle2"></div>3月
        </a>
        <a href="#" class="toggle__inner">
          <div class="toggle__triangle2"></div>2月
        </a>
        <a href="#" class="toggle__inner">
          <div class="toggle__triangle2"></div>1月
        </a>
      </div>
      <div class="toggle__header js-toggle">
        <div class="toggle__triangle"></div>2022
      </div>
      <div class="toggle__content">
      </div>
    </div>
  </div>
</aside>