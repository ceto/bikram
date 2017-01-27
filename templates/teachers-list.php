<?php
$args = array(
'post_type'  => 'teacher',
'posts_per_page' => -1,
'orderby' => 'menu_order',
'order' => 'ASC'
);
$the_teachers = new WP_Query( $args );
?>
<section class="teachers" id="teachers" data-magellan-target="teachers">
  <div class="ps ps--opaque">
      <?php while ($the_teachers->have_posts()) : $the_teachers->the_post(); ?>
          <div class="row">
          <div class="columns large-10 large-centered xlarge-8">
            <?php get_template_part('templates/teacher','card'); ?>
          </div>
      </div>
      <?php endwhile; ?>
  </div>
</section>