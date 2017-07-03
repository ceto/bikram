<?php
/**
 * Template Name: Studio Template With Teachers' List
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'narrowheader'); ?>
  <?php get_template_part('templates/teachers', 'list'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/widegallery'); ?>

<?php endwhile; ?>

