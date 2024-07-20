<div class="voice-cards__item voice-card">
  <div class="voice-card__inner">
    <div class="voice-card__title-wrap">
      <div class="voice-card__title-sub">
        <div class="voice-card__sub-contain">
          <p class="voice-card__old">
            <?php if(get_field('voice_1')): ?>
            <?php the_field('voice_1'); ?>
            <?php endif; ?>
            <?php if(get_field('voice_2')): ?>
            (<?php the_field('voice_2'); ?>)
            <?php endif; ?>
          </p>
          <?php if(get_field('voice_3')): ?>
          <div class="voice-card__tag">
            <?php the_field('voice_3'); ?>
          </div>
          <?php endif; ?>
        </div>
        <div class="voice-card__title-main"><?php the_title(); ?></div>
      </div>
      <div class="voice-card__img colorbox">
        <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
        <?php else : ?>
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
        <?php endif; ?>
      </div>
    </div>
    <?php if(get_field('voice_4')): ?>
    <div class=" voice-card__text">
      <?php the_field('voice_4'); ?>
    </div>
    <?php endif; ?>
  </div>
</div>