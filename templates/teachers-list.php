<?php
  $args = array(
  'post_type'  => 'teacher',
  'posts_per_page' => -1,
  'orderby' => 'menu_order',
  'order' => 'ASC'
  );
  $the_teachers = new WP_Query( $args );
?>
<section class="" id="teachers" data-magellan-target="teachers">
  <div class="ps">
    <div class="row">
      <div class="columns">
        <h2>Tanáraink</h2>
      </div>
    </div>
    <div class="row medium-up-2 large-up-3">
      <?php while ($the_teachers->have_posts()) : $the_teachers->the_post(); ?>
      <div class="column">
        <?php get_template_part('templates/teacher','card'); ?>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>