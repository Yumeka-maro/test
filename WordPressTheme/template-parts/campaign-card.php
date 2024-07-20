<div class="page-campaign-card campaign-card">
  <div class="campaign-card__inner">
    <div class="campaign-card__img">
      <?php if (has_post_thumbnail()) : ?>
      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
      <?php else : ?>
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
      <?php endif; ?>
    </div>
    <div class="campaign-card__body">
      <p class="campaign-card__tag"><?php the_field('campaign_1'); ?></p>
      <p class="campaign-card__title campaign-card__title--page"><?php the_title(); ?></p>
      <div class="campaign-card__sub campaign-card__sub--page">
        <p class="campaign-card__text"><?php echo $campaign_text; ?></p>
        <div class="campaign-card__price">
          <div class="campaign-card__discount"><?php the_field('campaign_2'); ?></div>
          <div class="campaign-card__cost campaign-card__cost--page"><?php the_field('campaign_3'); ?></div>
        </div>
      </div>
      <p class="campaign-card__comment u-desktop">
        <?php the_field('campaign_4'); ?>
      </p>
      <div class="campaign-card__note u-desktop">
        <p class="campaign-card__date"><?php the_field('campaign_5'); ?></p>
        <p class="campaign-card__booking">ご予約・お問合せはコチラ</p>
      </div>
      <div class="campaign-card__button u-desktop">
        <a href="<?php the_field('campaign_6'); ?>" class="button">Contact us<span></span></a>
      </div>
    </div>
  </div>
</div>