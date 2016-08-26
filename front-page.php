<?php get_template_part('templates/front', 'hero'); ?>
<div class="row">
  <div class="columns">
    <?php while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
</div>