<article <?php post_class('stickypost ps'); ?>>
  <div class="row">
    <div class="columns large-4">
      <header class="stickypost__header">
        <h2 class="stickypost__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if ( get_field('hasdate')==0 ) : ?>
        <?php get_template_part('templates/entry-meta'); ?>
        <?php endif; ?>
      </header>
    </div>
    <div class="columns large-8">
      <div class="stickypost__summary">
        <?php the_excerpt(); ?>
      </div>
    </div>
  </article>