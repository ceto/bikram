<div <?php post_class('calentry'); ?>>
  <span class="calentry__starttime"><?= date('H:i', strtotime( get_field('starts') ) ) ?></span>
  <span class="calentry__title">
    <a href="<?= get_the_permalink(get_field('class')); ?>"><?= get_the_title(get_field('class')); ?></a>
  </span>
  <?php $teacher=get_field('teacher') ?>
  <span class="calentry__teachername">
    <a href="<?= get_the_permalink(get_field('teacher')); ?>">
      <?= get_field('nick_name', $teacher->ID); ?>
    </a>
    </span>
  <figure class="calentry__teacherpic">
    <img src="http://placehold.it/40x40" alt="<?= get_the_title(get_field('teacher')); ?>">
    <figcaption>
      <a href="<?= get_the_permalink(get_field('teacher')); ?>">
        <?= get_field('nick_name', $teacher->ID); ?>
      </a>
    </figcaption>
  </figure>
</div>

