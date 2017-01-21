<?php get_template_part('templates/blog', 'header'); ?>
<?php get_template_part('templates/sticky', 'block'); ?>
<section class="minipostblock ps">
  <div class="row small-up-1 medium-up-2 large-up-3">
    <?php while (have_posts()) : the_post(); ?>
      <div class="column">
        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
      </div>
    <?php endwhile; ?>
  </div>
</section>
<?php the_posts_navigation(); ?>