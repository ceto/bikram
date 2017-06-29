<?php
/**
 * Template Name: Classes List Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<?php
  $args = array(
    'post_type'  => 'class',
    'order' => 'ASC',
    'orderby'  => 'menu_order',
    'posts_per_page' => -1
  );
  $the_classes = new WP_Query( $args );
?>
<div class="ps ps--narrow">
  <header class="heading">
    <div class="row column">
        <h2 class="heading__title">Jóga óráink</h2>
        <hr>
        <div class="heading__lead"><?php the_excerpt(); ?></div>
    </div>
  </header>
  <div class="row large-up-2">
    <?php while ($the_classes->have_posts()) : $the_classes->the_post(); ?>
      <div class="column">
        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
      </div>
    <?php endwhile; ?>
  </div>
</div>
