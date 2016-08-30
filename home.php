<?php  get_template_part('templates/sticky', 'block'); ?>
<?php get_template_part('templates/page', 'headersimple'); ?>


<div class="row medium-up-2 large-up-3 xxlarge-up-4">
  <?php while (have_posts()) : the_post(); ?>
    <div class="column">
      <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    </div>
  <?php endwhile; ?>
</div>


<?php the_posts_navigation(); ?>
