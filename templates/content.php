<article <?php post_class('minipost'); ?>>
  <header class="minipost__header">
        <h2 class="minipost__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if ( get_field('hasdate')==0 ) : ?>
          <?php get_template_part('templates/entry-meta'); ?>
        <?php endif; ?>
  </header>
  <div class="minipost__summary">
        <?php the_excerpt(); ?>
  </div>
</article>