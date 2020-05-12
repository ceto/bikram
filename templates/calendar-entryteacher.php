<div <?php post_class('calentry'); ?>>
  <div class="calcol calentry__title">
    <a href="<?= get_the_permalink(get_field('class')); ?>"><?= get_the_title(get_field('class')); ?></a>
    <small><?= get_field('tract') ?> <?= __('perc','bikram') ?><?= get_field('note')?' &middot; '.get_field('note').'</small>':''; ?></small>
  </div>
  <div class="calcol calentry__title">
   <?= date_i18n('l', strtotime( get_field('starts') ) ) ?> &middot; <?= date_i18n('H:i', strtotime( get_field('starts') ) ) ?>


    <small> <?= date_i18n('F&\nb\sp;d.', strtotime( get_field('starts') ) ) ?></small>
  </div>
  <div class="calcol calentry__actions">
    <?php if ( get_field('onlineonly', get_field('class') )) : ?>
        <a style="width:auto; height:auto; padding:0 0.333em 0.25em; line-height:1;" href="https://www.motibro.com/visitors/reservation_widget?operator=bikram-joga-kozpont" target="_blank" rel="nofollow" class="addtocalbtn">
            <span style="font-size:0.5em; display:inline-block; line-height:2;"><?= _e('JELENTKEZÉS', 'bikram') ?></span>
        </a>
      <?php else: ?>
        <a href="<?php echo the_gcaladdlink($post) ?>" target="_blank" rel="nofollow" class="addtocalbtn">
        <svg viewBox="0 0 512 640" class="icon icon--calendar-plus">
            <use xlink:href="<?=  get_stylesheet_directory_uri(); ?>/dist/images/icons.svg#icon--calendar-plus"></use>
        </svg>
        </a>
      <?php endif; ?>
  </div>
</div>

