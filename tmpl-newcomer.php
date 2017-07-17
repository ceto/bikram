<?php
/**
* Template Name: New Comer Template with FAQ
*/
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'templates/hero'); ?>
<div class="ps">
  <div class="row">
    <div class="columns content">
      <header class="heading">
        <h2 class="heading__title"><?php the_title(); ?></h2>
        <hr>
      <div class="heading__lead">
        <?php the_excerpt(); ?>
        <br>
      </div>
      </header>
      <div class="twocolumnblock">
       <?php the_content(); ?>
      </div>
      <a href="<?php the_permalink(206); ?>" class="button">Válassz óráink közül!</a>
    </div>
  </div>
</div>
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