<article <?php post_class('stickypost'); ?>>
  <div class="row">
    <div class="columns medium-8">
      <header class="stickypost__header">
        <?php get_template_part('templates/entry-meta'); ?>
        <h2 class="stickypost__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </header>
    </div>
    <div class="columns medium-4 medium-text-right">
      <a href="<?php the_permalink(); ?>" class="button"><?php _e('Click for details','bikram'); ?>&hellip;</a>
    </div>
  </article>