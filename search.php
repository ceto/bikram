<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
<div class="row">
  <div class="columns">
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'bikram'); ?>
  </div>
  <?php get_search_form(); ?>
  </div>
  </div>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'search'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
