<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voiceTop-sp.jpg"
            media="(max-width: 767px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voiceTop-pc.jpg"
            alt="ターコイズブルーの海でダイビングしている様子">
        </picture>
        <h1 class="page-mv__title">Voice</h1>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('breadcrumb') ?>

  <!-- お客様の声 -->
  <div class="page-voice layout-page-voice" id="voice">
    <div class="page-voice__inner inner">
      <div class="page-voice__tag tag">
        <a class="tag__button <?php echo !isset($_GET['term']) ? 'isActive' : ''; ?>"
          href="<?php echo get_post_type_archive_link('voice'); ?>">ALL</a>
        <a class="tag__button <?php echo (isset($_GET['term']) && $_GET['term'] == 'license-course_category') ? 'isActive' : ''; ?>"
          href="?term=license-course_category">ライセンス講習</a>
        <a class="tag__button <?php echo (isset($_GET['term']) && $_GET['term'] == 'fan-diving_category') ? 'isActive' : ''; ?>"
          href="?term=fan-diving_category">ファンダイビング</a>
        <a class="tag__button <?php echo (isset($_GET['term']) && $_GET['term'] == 'experience-diving_category') ? 'isActive' : ''; ?>"
          href="?term=experience-diving_category">体験ダイビング</a>
      </div>
      <div class="page-voice__contents voice-cards">
        <?php
        // クエリパラメータからタームスラッグを取得
        $filter_slug = isset($_GET['term']) ? sanitize_text_field($_GET['term']) : '';
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        // クエリ引数を定義
        $args = array(
          'post_type' => 'voice',
          'posts_per_page' => 6,  // ここでposts_per_pageを設定
          'paged' => $paged,
        );

        // タームスラッグが指定されている場合、タクソノミークエリを追加
        if ($filter_slug) {
          $args['tax_query'] = array(
            array(
              'taxonomy' => 'voice',
              'field'    => 'slug',
              'terms'    => $filter_slug,
            ),
          );
        }

        // カスタムクエリ
        $query = new WP_Query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
            $id = get_the_ID(); // 投稿ID
            $terms = get_the_terms($id, 'voice');

            if ($terms && !is_wp_error($terms)) :
              foreach ($terms as $term) :
                $slug = $term->slug; // タームのスラッグ

                get_template_part('template-parts/voice-card');
              endforeach;
            endif;
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
      <ul class="page-voice__pagination wp-pagenavi">
        <?php
        // ページネーションの生成
        $current_page = max(1, get_query_var('paged'));
        $total_pages = $query->max_num_pages;

        // ページリンクの生成
        $pages = paginate_links(array(
          'base' => get_pagenum_link(1) . '%_%',
          'format' => 'page/%#%/',
          'current' => $current_page,
          'total' => $total_pages,
          'type' => 'array',
          'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" class="pagination-item-link-icon" fill="none" viewBox="0 0 24 24" width="24" height="34" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 19l-7-7 7-7" /></svg>',
          'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" class="pagination-item-link-icon" fill="none" viewBox="0 0 24 24" width="24" height="34" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 5l7 7-7 7" /></svg>',
        ));

        if (is_array($pages)) {
          foreach ($pages as $page) {
            if (strpos($page, 'current') !== false) {
              echo '<li class="active">' . $page . '</li>';
            } else {
              echo '<li class="wp-pagenavi">' . $page . '</li>';
            }
          }
        }
        ?>
      </ul>
    </div>
  </div>
  <?php get_footer(); ?>