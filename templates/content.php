<article <?php post_class('minipost'); ?>>
  <header class="minipost__header">
    <div class="row">
      <div class="columns">
        <h2 class="minipost__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
    </div>
  </header>
  <div class="minipost__summary">
    <div class="row">
      <div class="columns">
        <?php the_excerpt(); ?>
      </div>
    </div>
  </div>
</article>