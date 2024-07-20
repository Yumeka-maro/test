<?php get_header(); ?>

<main>
  <div class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blogTop-sp.jpg"
            media="(max-width: 767px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blogTop-pc.jpg" alt="青い海と大量の魚">
        </picture>
        <h1 class="page-mv__title">Blog</h1>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('breadcrumb'); ?>

  <div class="page-blog layout-page-blog">
    <div class="page-blog__inner inner">
      <div class="page-blog__main">
        <ul class="page-blog__cards blog-cards blog-cards--page">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <li class="blog-card">
            <a href="<?php the_permalink(); ?>">
              <div class="blog-card__inner">
                <div class="blog-card__img">
                  <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                  <?php endif; ?>
                </div>
                <div class="blog-card__body">
                  <time class="blog-card__date blog-card__date--page"
                    datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
                  <p class="blog-card__title"><?php the_title(); ?></p>
                  <p class="blog-card__text">
                    <?php
                      if (mb_strlen($post->post_content, 'UTF-8') > 123) {
                        $content = mb_substr($post->post_content, 0, 123, 'UTF-8');
                        echo $content . '...';
                      } else {
                        echo $post->post_content;
                      }
                      ?>
                  </p>
                </div>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
          <?php else : ?>
          <p><?php _e('No posts found for this month.', 'textdomain'); ?></p>
          <?php endif; ?>
        </ul>


        <ul class="page-blog__pagination wp-pagenavi">
          <?php
          global $wp_query;
          $current_page = max(1, get_query_var('paged'));
          $total_pages = $wp_query->max_num_pages;

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
                echo '<li class=" active">' . $page . '</li>';
              } else {
                echo '<li class="wp-pagenavi">' . $page . '</li>';
              }
            }
          }
          ?>
        </ul>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>