<article <?php post_class('minipost'); ?>>
  <div class="firsthalf">
    <figure class="minipost__fig">
      <a href="<?php the_permalink(); ?>">
        <img src="http://lorempixel.com/1280/640" alt="">
      </a>
    </figure>
  </div>
  <div class="secondhalf">
    <div class="minipost__text">
      <header class="minipost__header">
        <h2 class="minipost__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="minipost__summary">
        <?php the_excerpt(); ?>
      </div>
      <a href="<?php the_permalink(); ?>" class="button small">Részletek</a>
    </div>
  </div>
</article>