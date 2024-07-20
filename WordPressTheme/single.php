<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blogTop-sp.jpg"
            media="(max-width: 767px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blogTop-pc.jpg" alt="青い海と大量の魚">
        </picture>
        <div class="page-mv__title">Blog</div>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('breadcrumb') ?>

  <!-- ブログ -->
  <div class="page-blog layout-page-blog">
    <div class="page-blog__inner inner">
      <div class="page-blog__main detail">
        <?php if (have_posts()) :
          while (have_posts()) :
            the_post(); ?>
        <time class="detail__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
        <h1 class="detail__title"><?php the_title(); ?></h1>
        <?php if (get_the_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" class="detail__img">
        <?php else : ?>
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
        <?php endif; ?>
        <div class="detail__content">
          <?php the_content(); ?>
        </div>
        <div class="page-blog__pagination wp-pagenavi">
          <?php if (get_previous_post()) : ?>
          <li class="wp-pagenavi-item">
            <?php previous_post_link('%link', '<svg xmlns="http://www.w3.org/2000/svg" class="pagination-item-link-icon" fill="none" viewBox="0 0 24 24" width="24" height="34" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 19l-7-7 7-7" /></svg>'); ?>
          </li>
          <?php endif; ?>
          <?php if (get_next_post()) : ?>
          <li class="wp-pagenavi-item">
            <?php next_post_link('%link', '<svg xmlns="http://www.w3.org/2000/svg" class="pagination-item-link-icon" fill="none" viewBox="0 0 24 24" width="24" height="34" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 5l7 7-7 7" /></svg>'); ?>
          </li>
          <?php endif; ?>
        </div>
        <?php endwhile;
        endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  <?php get_footer(); ?>