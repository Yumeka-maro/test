<?php if ( function_exists('bcn_display') ) { ?>
<div class="breadcrumb">
  <div class="inner">
    <div class="breadcrumb__text<?php if (is_404()) echo ' breadcrumb__text--white'; ?>">
      <?php bcn_display(); ?>
    </div>
  </div>
</div>
<?php } ?>