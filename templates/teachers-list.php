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
  <div class="ps">
    <div class="row">
      <div class="columns">
        <h1 class="heading__title">Oktatók a stúdióban</h1>
        <hr>
        <p class="heading__lead">A jóga életforma. Célunk, hogy Neked is megmutassuk mennyi mindent kaphatsz általa. Adni valamit, amely egész későbbi életedet végigkíséri. Valamit, ami erőt, energiát, önbizalmat nyújt neked. Valamit, ami nem csak a testedet edzi, de segítségével a lelked is erősebb lesz.</p>
      </div>
    </div>
  </div>
  <div class="ps ps--notop">
    <div class="row small-up-2 tablet-up-3 large-up-4 ">
      <?php while ($the_teachers->have_posts()) : $the_teachers->the_post(); ?>
        <div class="columns">
          <?php get_template_part('templates/teacher','card'); ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>