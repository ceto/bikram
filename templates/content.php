<article <?php post_class('minipost'); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
    <figure class="minipost__fig">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(medium_large); ?>
      </a>
    </figure>
  <?php endif; ?>
  <div class="minipost__text">
    <header class="minipost__header">
      <h3 class="minipost__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="minipost__summary">
      <?php the_excerpt(); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="button small">Részletek</a>
  </div>
</article>