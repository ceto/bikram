<?php
/**
* Template Name: Class List Template
*/
?>

  <?php get_template_part('templates/page', 'header'); ?>

  <?php
    $args = array(
      'post_type'  => 'event',
      'posts_per_page' => -1,
      'meta_query' => array(
        'relation'=>'AND',
        array('key' => 'starts', 'compare' => '>=', 'value' => date('Y-m-d'), type => 'DATE' )
      )
    );
    $the_events = new WP_Query( $args );
  ?>
  <section class="ps ps--opaque">
    <div class="row">
      <div class="columns large-10 large-centered xxlarge-9">
        <div class="calendar calendar--all">
          <h2>Órarend</h2>
          <?php $prevday=''; ?>
          <?php while ($the_events->have_posts()) : $the_events->the_post(); ?>
            <?php $thisday = date('Y-m-d l', strtotime(get_field('starts'))); ?>
            <?php if ( $thisday != $prevday ) : ?><h3><?= $prevday=$thisday; ?></h3><?php endif; ?>
            <?php get_template_part('templates/calendar','entry'); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>


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
</section>

<?php get_template_part('templates/sticky', 'block'); ?>
