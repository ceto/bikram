<?php
/**
* Template Name: Schedule
*/
?>

  <?php get_template_part('templates/schedule', 'header'); ?>

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
          <div class="aday aday--nopad">
            <img src="<?= get_template_directory_uri().'/dist/images/orarend.jpg' ?> " alt="Órarend áttekintő">
          </div>
          <?php $prevday=''; ?>
          <?php while ($the_events->have_posts()) : $the_events->the_post(); ?>
            <?php
              $thisday = date_i18n('F d.', strtotime(get_field('starts')));
              $nameoftheday = date_i18n('l', strtotime(get_field('starts')));
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
          <?php endwhile; ?>
          <?php if ( ($thisday == $prevday)  ) : ?></div></div><?php endif; ?>

        </div>
      </div>
    </div>
  </section>
