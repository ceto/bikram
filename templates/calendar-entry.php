<div <?php post_class('calentry'); ?>>
  <div class="calcol calentry__starttime">
    <?= date('H:i', strtotime( get_field('starts') ) ) ?>
    <!-- <small>60 perc</small> -->
  </div>
  <div class="calcol calentry__title">
    <a href="<?= get_the_permalink(get_field('class')); ?>"><?= get_the_title(get_field('class')); ?></a>
    <small><?= get_field('tract') ?> perc<?= get_field('note')?' &middot; '.get_field('note'):''; ?></small>
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

