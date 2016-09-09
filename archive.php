<?php get_template_part('templates/blog', 'header'); ?>
<?php get_template_part('templates/sticky', 'block'); ?>
<section class="minipostblock">
  <?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php endwhile; ?>
</section>
<?php the_posts_navigation(); ?>