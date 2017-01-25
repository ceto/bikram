<?php
/**
 * Template Name: Studio Template With Teachers' List
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>

  <?php //get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>
<div class="ps ps--narrow">
  <div class="row">
    <div class="columns">
      <h1 class="heading__title"><?php the_title(); ?></h1>
      <hr>
    </div>
  </div>
</div>
  <?php get_template_part('templates/teachers', 'list'); ?>
  <section class="photostripe">
    <div class="photostripe__item">
      <img src="http://placehold.it/1200x800/2a2a2a?text=studiofoto 1." alt="">
      <img src="http://placehold.it/1200x800/333/?text=studiofoto 2." alt="">
      <img src="http://placehold.it/1200x800/000/?text=studiofotok" alt="">
      <img src="http://placehold.it/1200x800?text=studiofoto 1." alt="">
    </div>
  </section>
  <section class="photostripe photostripe--narrow">
    <div id="instafeed"></div>
  </section>

