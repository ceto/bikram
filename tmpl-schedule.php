<?php
/**
* Template Name: Schedule
*/
?>

  <?php //get_template_part('templates/schedule', 'header'); ?>
  <?php get_template_part('templates/page', 'header'); ?>

<!--   <div class="ps ps--dark ps--largetop">
    <div class="row">
      <div class="columns"><h1><?php the_title() ?></h1></div>
    </div>
  </div> -->
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
  <section class="ps thetimetable">
    <div class="row">
      <div class="columns large-10 large-centered">
        <div class="schedule schedule--all">
          <?php $prevday=''; ?>
          <?php while ($the_events->have_posts()) : $the_events->the_post(); ?>
            <?php
              $thisday = date('Y. F d.', strtotime(get_field('starts')));
              $nameoftheday = date('l', strtotime(get_field('starts')));
            ?>
            <?php if ( ($prevday!='') && ($thisday != $prevday)  ) : ?></div></div><?php endif; ?>
            <?php if ( $thisday != $prevday ) : ?>
              <div class="aday">
                <h3 class="aday__title">
                  <?= $nameoftheday ?> <small><?= $prevday=$thisday; ?></small>
                </h3>
                <div class="calendar calendar--day">
            <?php endif; ?>
            <?php get_template_part('templates/calendar','entry'); ?>
            <?php get_template_part('templates/calendar','entry'); ?>
          <?php endwhile; ?>
          <?php if ( ($thisday == $prevday)  ) : ?></div></div><?php endif; ?>

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




<?php get_template_part('templates/sticky', 'block'); ?>
<section class="photostripe">
    <div class="photostripe__item">
      <img src="http://placehold.it/1200x800/2a2a2a?text=studiofoto 1." alt="">
      <img src="http://placehold.it/1200x800/333/?text=studiofoto 2." alt="">
      <img src="http://placehold.it/1200x800/000/?text=studiofotok" alt="">
      <img src="http://placehold.it/1200x800?text=studiofoto 1." alt="">
    </div>
</section>
