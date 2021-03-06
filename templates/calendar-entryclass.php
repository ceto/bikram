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
    <?php if ( get_field('onlineonly', get_field('class') )) : ?>
        <br><span class="onlinelabel"><?= _e('Online', 'bikram') ?></span>
    <?php else: ?>
        <br><span class="offlinelabel"><?= _e('Stúdió', 'bikram') ?></span>
    <?php endif; ?>
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
        <?php
            $regurl='https://www.motibro.com/visitors/reservation_widget?operator=bikram-joga-kozpont';
            if ( get_field('regurl') ) {$regurl=get_field('regurl');}
        ?>
        <?php if ( get_field('regisneeded') ) : ?>
        <a style="width:auto; height:auto; padding:0 0.333em 0.25em; line-height:1;" href="<?= $regurl; ?>" target="_blank" rel="nofollow" class="addtocalbtn">
            <span style="font-size:0.5em; display:inline-block; line-height:2;"><?= _e('BEJELENTKEZÉS', 'bikram') ?></span>
        </a>
        <?php else: ?>
            <span style="text-align: center;font-size:0.9375em; font-weight: normal; max-width:7em; display:inline-block; padding:.5em 0;"><?= _e('Bejelentkezés nélkül jöhetsz', 'bikram') ?></span>
        <?php endif; ?>
  </div>
</div>
