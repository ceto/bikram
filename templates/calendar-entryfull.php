<div <?php post_class('calentry'); ?>>
  <div class="calcol calentry__title">
    <?= date('l', strtotime( get_field('starts') ) ) ?>
    <small><?= date('Y. F d.', strtotime( get_field('starts') ) ) ?></small>
  </div>
  <div class="calcol calentry__title calentry__between">
    <?= date('H:i', strtotime( get_field('starts') ) ) ?>
    <?= get_field('note')?'<small>'.get_field('note').'</small>':''; ?>
  </div>
  <?php $teacher=get_field('teacher'); ?>
  <figure class="calcol calentry__teacherpic">
    <a href="<?= get_the_permalink(get_field('teacher')); ?>">
      <img src="http://placehold.it/40x40" alt="<?= get_the_title(get_field('teacher')); ?>">
    </a>
    <figcaption>
      <a href="<?= get_the_permalink(get_field('teacher')); ?>">
        <?= get_field('nick_name', $teacher->ID); ?>
      </a>
    </figcaption>
  </figure>
  <div class="calcol calentry__actions">
    <a href="#" class="button small secondary">Beírom</a>
  </div>
</div>
