<?php
  $avatar = get_field('avatar', get_field('teacher'));
?>
<div <?php post_class('calentry'); ?>>
  <div class="calcol calentry__title">
    <?= date_i18n('l', strtotime( get_field('starts') ) ) ?> &middot; <?= date_i18n('F&\nb\sp;d.', strtotime( get_field('starts') ) ) ?>
    <small><?= get_field('tract') ?> <?= __('perc','bikram') ?><?= get_field('note')?' &middot; '.get_field('note'):''; ?></small>
  </div>
  <div class="calcol calentry__title calentry__starttime">
    <?= date_i18n('H:i', strtotime( get_field('starts') ) ) ?>
  </div>
  <?php $teacher=get_field('teacher'); ?>
  <figure class="calcol calentry__teacherpic">
    <a href="<?= (ICL_LANGUAGE_CODE=='en')?'#':get_the_permalink( get_field('teacher') ); ?>">
      <?= wp_get_attachment_image($avatar[ID],'thumbnail' ); ?>
    </a>
    <figcaption>
      <a href="<?= (ICL_LANGUAGE_CODE=='en')?'#':get_the_permalink(get_field('teacher')); ?>">
        <?= get_field('nick_name', $teacher->ID); ?>
      </a>
    </figcaption>
  </figure>
  <div class="calcol calentry__actions">
    <a href="<?= the_gcaladdlink($post) ?>" target="_blank" rel="nofollow" class="addtocalbtn">
      <svg viewBox="0 0 512 640" class="icon icon--calendar-plus">
            <use xlink:href="<?=  get_stylesheet_directory_uri(); ?>/dist/images/icons.svg#icon--calendar-plus"></use>
      </svg>
    </a>
  </div>
</div>
