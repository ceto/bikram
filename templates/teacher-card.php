<div class="tcard">
    <figure class="tcard__photo">
    <a href="<?php the_permalink(); ?>">
      <img src="http://lorempixel.com/768/768/people" alt="">
    </a>
  </figure>
  <header class="tcard__header">
              <p class="tcard__quote">
          <?php if (have_rows('quote')): ?>
          <?php while ( have_rows('quote') ) : the_row(); ?>
            <?php the_sub_field('quote_row') ?>
          <?php endwhile; ?>
          <?php else: ?>
            Ha ebbe nem <em>haltam</em> bele akkor már soha semmibe se fogok
          <?php endif; ?>
        </p>
  <h3 class="tcard__name"><a href="<?php the_permalink(); ?>"><?php //the_field('nick_name'); ?><?php the_title(); ?></a></h3>



    <div class="tcard__text">
      <?php
        global $more; $more = 0;
        the_excerpt();
      ?>
    </div>

    <a class="tcard__more" href="<?php the_permalink(); ?>"><?php the_field('nick_name'); ?> órái és bemutakozása &hellip;</a>
  </header>
</div>