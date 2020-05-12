<?php
  $avatar = get_field('avatar', get_field('teacher'));
?>
<div <?php post_class('calentry'); ?>>
  <div class="calcol calentry__starttime">
    <?= date('H:i', strtotime( get_field('starts') ) ) ?>
  </div>
  <div class="calcol calentry__title">
    <a href="<?= get_the_permalink(get_field('class')); ?>"><?= get_the_title(get_field('class')); ?></a>
    <small><?= get_field('tract') ?> <?= __('perc','bikram') ?><?= get_field('note')?' &middot; '.get_field('note'):''; ?></small>
  </div>
  <?php $teacher=get_field('teacher'); ?>
  <figure class="calcol calentry__teacherpic">
    <a href="<?= (ICL_LANGUAGE_CODE=='en')?'#':get_the_permalink(get_field('teacher')); ?>">
      <?= wp_get_attachment_image($avatar[ID],'thumbnail' ); ?>
    </a>
    <figcaption>
      <a href="<?= (ICL_LANGUAGE_CODE=='en')?'#':get_the_permalink(get_field('teacher')); ?>">
        <?= get_field('nick_name', $teacher->ID); ?>
      </a>
    </figcaption>
  </figure>
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

