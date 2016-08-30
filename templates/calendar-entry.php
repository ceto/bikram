<div <?php post_class('calentry'); ?>>
    <span class="calentry__starttime"><?= date('H:i', strtotime( get_field('starts') ) ) ?></span>
    <span class="calentry__title">
      <a href="<?= get_the_permalink(get_field('class')); ?>"><?= get_the_title(get_field('class')); ?></a>
    </span>
    <span class="calentry__teacher"><?= get_the_title(get_field('teacher')); ?></span>
    <fiugure class="calentry__teacher">
      <img src="http://placehold.it/40x40" alt="<?= get_the_title(get_field('teacher')); ?>">
    </fiugure>
</div>
<hr>