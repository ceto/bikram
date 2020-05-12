<?php
  $avatar = get_field('avatar', get_field('teacher'));
?>
<div <?php post_class('calentry'); ?>>
  <div class="calcol calentry__starttime">
    <?= date('H:i', strtotime( get_field('starts') ) ) ?>
    <?php if ( get_field('onlineonly', get_field('class') )) : ?>
        <br><span class="onlinelabel"><?= _e('Online', 'bikram') ?></span>
    <?php else: ?>
        <br><span class="offlinelabel"><?= _e('Stúdió', 'bikram') ?></span>
    <?php endif; ?>
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
        <a style="width:auto; height:auto; padding:0 0.333em 0.25em; line-height:1;" href="https://www.motibro.com/visitors/reservation_widget?operator=bikram-joga-kozpont" target="_blank" rel="nofollow" class="addtocalbtn">
            <span style="font-size:0.5em; display:inline-block; line-height:2;"><?= _e('BEJELENTKEZÉS', 'bikram') ?></span>
        </a>
  </div>
</div>

