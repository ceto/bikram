<div <?php post_class('calentry'); ?>>
  <div class="calcol calentry__title">
    <a href="<?= get_the_permalink(get_field('class')); ?>"><?= get_the_title(get_field('class')); ?></a>
    <small>60 perc<?= get_field('note')?' &middot; '.get_field('note').'</small>':''; ?></small>
  </div>
  <div class="calcol calentry__title">
  <?= date_i18n('Y. F d.', strtotime( get_field('starts') ) ) ?>

    <small> <?= date_i18n('l', strtotime( get_field('starts') ) ) ?> | <?= date_i18n('H:i', strtotime( get_field('starts') ) ) ?></small>
  </div>
  <div class="calcol calentry__actions">
    <a href="#" class="button small secondary">Beírom</a>
  </div>

</div>

