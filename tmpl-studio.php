<?php
/**
 * Template Name: Studio Template With Teachers' List
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'narrowheader'); ?>
  <?php get_template_part('templates/teachers', 'list'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>

<section class="photostripe">
  <div class="photostripe__item">
    <img src="http://placehold.it/1200x800/2a2a2a?text=studiofoto 1." alt="">
    <img src="http://placehold.it/1200x800/333/?text=studiofoto 2." alt="">
    <img src="http://placehold.it/1200x800/000/?text=studiofotok" alt="">
    <img src="http://placehold.it/1200x800?text=studiofoto 1." alt="">
  </div>
</section>

<?php endwhile; ?>

