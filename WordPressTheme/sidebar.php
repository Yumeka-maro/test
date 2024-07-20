<aside class="page-blog__aside aside">
  <div class="aside__content">
    <div class="aside__caption caption">
      <div class="caption__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/whale-black.svg"
          alt="黒鯨"></div>
      <h2 class="caption__text">人気記事</h2>
    </div>
    <div class="aside__article aside-article">
      <?php
      // メインクエリ: `post_views_count`に基づいて記事を取得
      $args_main = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'meta_value_num',
        'meta_key' => 'post_views_count',
        'order' => 'DESC'
      );

      $main_query = new WP_Query($args_main);
      $posts_count = $main_query->found_posts; // メインクエリで見つかった投稿数

      // 不足している場合に備えて、取得した投稿IDを格納する配列を用意
      $post_ids = wp_list_pluck($main_query->posts, 'ID');
      ?>

      <?php if ($main_query->have_posts()) : ?>
      <?php while ($main_query->have_posts()) : $main_query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="aside-article__inner">
        <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像"
          class="aside-article__img">
        <?php endif; ?>
        <div class="aside-article__text">
          <time class="detail__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
          <p class="aside-article__title"><?php the_title(); ?></p>
        </div>
      </a>
      <?php endwhile; ?>
      <?php endif; ?>

      <?php
      // メインクエリをリセット
      wp_reset_postdata();

      // 不足している場合は追加のクエリで記事を補充
      if ($posts_count < 3) {
        $args_fallback = array(
          'post_type' => 'post',
          'posts_per_page' => 3 - $posts_count, // 不足している数を取得
          'post__not_in' => $post_ids, // すでに取得した投稿を除外
          'orderby' => 'date',
          'order' => 'DESC'
        );

        $fallback_query = new WP_Query($args_fallback);

        if ($fallback_query->have_posts()) : ?>
      <?php while ($fallback_query->have_posts()) : $fallback_query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="aside-article__inner">
        <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像"
          class="aside-article__img">
        <?php endif; ?>
        <div class="aside-article__text">
          <time class="detail__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
          <p class="aside-article__title"><?php the_title(); ?></p>
        </div>
      </a>
      <?php endwhile; ?>
      <?php endif;

        // フォールバッククエリをリセット
        wp_reset_postdata();
      }
      ?>
    </div>


  </div>
  <div class="aside__content">
    <div class="aside__caption caption">
      <div class="caption__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/whale-black.svg"
          alt="黒鯨"></div>
      <h2 class="caption__text">口コミ</h2>
    </div>
    <div class="aside__voice aside-voice">
      <?php
      // 最新の投稿1件を取得するクエリ
      $args = array(
        'post_type' => 'voice',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
      );

      $latest_voice_query = new WP_Query($args);

      if ($latest_voice_query->have_posts()) : ?>
      <?php while ($latest_voice_query->have_posts()) : $latest_voice_query->the_post(); ?>
      <div class="aside-voice__inner">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>の写真" class="aside-voice__img">
        <p class="aside-voice__age">
          <?php echo get_field('voice_1'); ?>
          <?php if (get_field('voice_2')) : ?>
          (<?php the_field('voice_2'); ?>)
          <?php endif; ?>
        </p> <!-- カスタムフィールドから年齢を取得 -->
        <p class="aside-voice__title"><?php the_title(); ?></p>
        <div class="aside__button">
          <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="button">View more<span></span></a>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
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
          'post_type' => 'campaign',
          'posts_per_page' => 2,
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $latest_campaign_query = new WP_Query($args);
        ?>
        <?php if ($latest_campaign_query->have_posts()) : ?>
        <?php while ($latest_campaign_query->have_posts()) : $latest_campaign_query->the_post(); ?>
        <div class="aside__card aside-card">
          <div class="aside-card__inner">
            <div class="aside-card__img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>の画像">
            </div>
            <div class="aside-card__body">
              <p class="aside-card__title"><?php the_title(); ?></p>
              <div class="aside-card__sub">
                <p class="aside-card__text">全部コミコミ(お一人様)</p>
                <div class="aside-card__price">
                  <div class="aside-card__discount"><?php echo get_field('campaign_2'); ?></div>
                  <div class="aside-card__cost"><?php echo get_field('campaign_3'); ?></div>
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
    <div class="aside__button"><a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="button">View
        more<span></span></a></div>
  </div>
  <div class="aside__content">
    <div class="aside__caption caption">
      <div class="caption__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/whale-black.svg"
          alt="黒鯨"></div>
      <h2 class="caption__text">アーカイブ</h2>
    </div>
    <div class="aside__toggle toggle">
      <?php
      // 年ごとのアーカイブリンクを生成
      $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
      foreach ($years as $year) {
      ?>
      <div class="toggle__header js-toggle">
        <div class="toggle__triangle"></div>
        <?php echo $year; ?>
      </div>
      <div class="toggle__content">
        <div class="toggle__inner">
          <div class="toggle__triangle2"></div>
          <?php
            // 月ごとのアーカイブリンクを生成
            wp_get_archives(array(
              'type' => 'monthly',
              'format' => 'custom',
              'show_post_count' => false,
              'echo' => 1
            ));
            ?>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
</aside>