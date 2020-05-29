<div <?php post_class('calentry'); ?>>
  <div class="calcol calentry__title">
  <?php if ( get_field('onlineonly', get_field('class') )) : ?>
        <span class="onlinelabel"><?= _e('Online', 'bikram') ?></span><br>
    <?php else: ?>
        <span class="offlinelabel"><?= _e('Stúdió', 'bikram') ?></span><br>
    <?php endif; ?>
    <a href="<?= get_the_permalink(get_field('class')); ?>"><?= get_the_title(get_field('class')); ?></a>
    <small><?= get_field('tract') ?> <?= __('perc','bikram') ?><?= get_field('note')?' &middot; '.get_field('note').'</small>':''; ?></small>
</div>
  <div class="calcol calentry__title">
   <?= date_i18n('l', strtotime( get_field('starts') ) ) ?> &middot; <?= date_i18n('H:i', strtotime( get_field('starts') ) ) ?>
    <small> <?= date_i18n('F&\nb\sp;d.', strtotime( get_field('starts') ) ) ?></small>
  </div>
  <div class="calcol calentry__actions">
        <?php if ( get_field('regisneeded') ) : ?>
        <a style="width:auto; height:auto; padding:0 0.333em 0.25em; line-height:1;" href="https://www.motibro.com/visitors/reservation_widget?operator=bikram-joga-kozpont" target="_blank" rel="nofollow" class="addtocalbtn">
            <span style="font-size:0.5em; display:inline-block; line-height:2;"><?= _e('BEJELENTKEZÉS', 'bikram') ?></span>
        </a>
        <?php else: ?>
            <span style="text-align: center;font-size:0.9375em; font-weight: normal; max-width:7em; display:inline-block; padding:.5em 0;"><?= _e('Bejelentkezés nélkül jöhetsz', 'bikram') ?></span>
        <?php endif; ?>
  </div>
</div>

