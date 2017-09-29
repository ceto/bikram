<?php
/**
* Template Name: New Comer Template with FAQ
*/
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'templates/hero'); ?>
<div class="ps">
  <div class="row">
    <div class="columns tablet-8 tablet-centered xxlarge-uncentered content">
      <header class="heading">
        <h2 class="heading__title"><?php the_title(); ?></h2>
        <hr>
      <div class="heading__lead">
        <?php the_excerpt(); ?>
        <br>
      </div>
      </header>
       <?php the_content(); ?>
    </div>
  </div>
</div>
<?php get_template_part('templates/widegallery'); ?>
<div class="ps ps--opaque">
  <div class="row">
    <div class="columns tablet-8 tablet-centered xxlarge-6 xxlarge-uncentered">
      <div class="content">
        <?php the_field('content2'); ?>
      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>