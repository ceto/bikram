<?php $avatar = get_field('avatar'); ?>
<div class="tcard">
  <figure class="tcard__photo">
    <a href="<?php the_permalink(); ?>">
      <?= wp_get_attachment_image($avatar[ID], 'thumbnail' ); ?>
    </a>
  </figure>
  <header class="tcard__header">
    <h3 class="tcard__name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="tcard__quote">

      <?php while ( have_rows('quote') ) : the_row(); ?>
        <?php the_sub_field('quote_row')?>
      <?php endwhile; ?>

    </p>
    <a class="tcard__more" href="<?php the_permalink(); ?>"><?php the_field('nick_name'); ?> <?= __('órái és bemutakozása','bikram') ?>&hellip;</a>
  </header>
</div>