<article <?php post_class('miniclass'); ?>>
  <header class="miniclass__header">
    <h2 class="miniclass__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="miniclass__summary">
    <?php the_excerpt(); ?>
  </div>
  <a href="<?php the_permalink(); ?>" class="miniclass__more">Időpontok és részletek&hellip;</a>
</article>