<div <?php post_class('calentry'); ?>>
    <span class="calentry__date"><?= date('Y-m-d', strtotime( get_field('starts') ) ) ?></span>
    <span class="calentry__day"><?= date('l', strtotime( get_field('starts') ) ) ?></span>
    <span class="calentry__between"><?= date('H:i', strtotime( get_field('starts') ) ) ?> - <?= get_field('ends'); ?> </span>

    <span class="calentry__teacher"><?= get_the_title(get_field('teacher')); ?></span>
    <fiugure class="calentry__teacher">
      <img src="http://placehold.it/40x40" alt="<?= get_the_title(get_field('teacher')); ?>">
    </fiugure>
</div>
<hr>