<div <?php post_class('calentry'); ?>>
  <div class="calcol calentry__title">
    <a href="<?= get_the_permalink(get_field('class')); ?>"><?= get_the_title(get_field('class')); ?></a>
    <small><?= get_field('tract') ?> perc<?= get_field('note')?' &middot; '.get_field('note').'</small>':''; ?></small>
  </div>
  <div class="calcol calentry__title">
   <?= date_i18n('l', strtotime( get_field('starts') ) ) ?> &middot; <?= date_i18n('H:i', strtotime( get_field('starts') ) ) ?>


    <small> <?= date_i18n('F&\nb\sp;d.', strtotime( get_field('starts') ) ) ?></small>
  </div>
  <div class="calcol calentry__actions">
    <a href="<?= the_gcaladdlink($post) ?>" target="_blank" rel="nofollow" class="button small secondary">+Cal
      <!-- <svg viewBox="0 0 20 20" class="icon icon--calendar-plus">
            <use xlink:href="<?=  get_stylesheet_directory_uri(); ?>/dist/images/icons.svg#icon--calendar-plus"></use>
      </svg> -->
    </a>
  </div>

</div>

