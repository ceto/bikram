<?php get_template_part('templates/front', 'hero'); ?>
<?php  get_template_part('templates/sticky', 'block'); ?>
<?php
  $args = array(
    'post_type'  => 'class',
    'order' => 'ASC',
    'orderby'  => 'menu_order',
    'posts_per_page' => -1
  );
  $the_classes = new WP_Query( $args );
?>


<section id="classes" class="ps classlist">
  <div class="row large-up-2">
    <?php while ($the_classes->have_posts()) : $the_classes->the_post(); ?>
      <div class="column">
        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
      </div>
    <?php endwhile; ?>
  </div>
  <div class="row">
    <div class="columns">
      <a class="button" href="<?php the_permalink(42) ?>">Ugrás az órarendre</a>
    </div>
  </div>
</section>
