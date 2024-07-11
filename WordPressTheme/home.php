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
        <h1 class="page-mv__title">Blog</h1>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <div class="breadcrumb">
    <div class="inner">
      <div class="breadcrumb__text">
        <p>TOP</p><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/breadcrumb.svg" alt="矢印">
        <p>ブログ一覧</p>
      </div>
    </div>
  </div>

  <!-- ブログ -->
  <div class="page-blog layout-page-blog">
    <div class="page-blog__inner inner">
      <div class="page-blog__main">
        <ul class="page-blog__cards blog-cards blog-cards--page">
          <?php if (have_posts()) :
            while (have_posts()) :
              the_post(); ?>
          <li class="blog-card">
            <a href="<?php the_permalink(); ?>">
              <div class="blog-card__inner">
                <div class="blog-card__img">
                  <?php if (get_the_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                  <?php endif; ?>
                </div>
                <div class="blog-card__body">
                  <time class="blog-card__date blog-card__date--page"
                    datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
                  <p class="blog-card__title"><?php the_title(); ?></p>
                  <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                </div>
              </div>
            </a>
          </li>
          <?php endwhile;
          endif; ?>
        </ul>
        <ul class="page-blog__pagination pagination">
          <li class="pagination-item pagination-item--first-item">
            <a class="pagination-item-link" href="/pages/1/">
              <svg xmlns="http://www.w3.org/2000/svg" class="pagination-item-link-icon" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 19l-7-7 7-7" />
              </svg>
            </a>
          </li>
          <li class="pagination-item">
            <a class="pagination-item-link isActive" href="/pages/1/"><span>1</span></a>
          </li>
          <li class="pagination-item">
            <a class="pagination-item-link" href="/pages/2/"><span>2</span></a>
          </li>
          <li class="pagination-item">
            <a class="pagination-item-link" href="/pages/3/"><span>3</span></a>
          </li>
          <li class="pagination-item">
            <a class="pagination-item-link" href="/pages/4/"><span>4</span></a>
          </li>
          <li class="pagination-item u-desktop">
            <a class="pagination-item-link" href="/pages/5/"><span>5</span></a>
          </li>
          <li class="pagination-item u-desktop">
            <a class="pagination-item-link" href="/pages/6/"><span>6</span></a>
          </li>
          <li class="pagination-item pagination-item--last-item">
            <a class="pagination-item-link" href="/pages/6/">
              <svg xmlns="http://www.w3.org/2000/svg" class="pagination-item-link-icon" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 5l7 7-7 7" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  <?php get_footer(); ?>