<div class="reveal eventsmodal fast" id="eventsmodal" data-overlay="false" data-v-offset="0" data-show-delay="0" data-hide-delay="0" data-reveal data-animation-in="slide-in-right" data-animation-out="slide-out-right">
  <?php
    $soday=date('Y-m-d');
    $eoday=date('Y-m-d', strtotime($soday.' +1 day'));
    $dayargs = array(
      'post_type'  => 'event',
      'posts_per_page' => -1,
      'meta_query' => array(
      'relation'=>'AND',
        array('key' => 'starts', 'compare' => '>=', 'value'=> $soday, type => 'DATE' ),
        array('key' => 'starts', 'compare' => '<', 'value'=> $eoday, type => 'DATE' )
      )
    );
    $the_dayevents = new WP_Query( $dayargs );
  ?>
  <aside role="marquee">
  <br>
    <div class="owl-carousel minical-carousel">
      <?php while ($the_dayevents->found_posts>0): ?>
        <div class="item minical">
          <h3 class="minical__daytitle">
            <?= date_i18n('l' , strtotime($soday) ); ?>
            <small><?= date_i18n('Y. F d.', strtotime($soday) ); ?></small>
          </h3>
          <hr>
          <div class="calendar calendar--mini">
            <?php while ($the_dayevents->have_posts()) : $the_dayevents->the_post(); ?>
              <?php get_template_part('templates/calendar','entry'); ?>
              <?php get_template_part('templates/calendar','entry'); ?>
            <?php endwhile; ?>
          </div>
        </div>
        <?php
          $soday=date('Y-m-d', strtotime($soday.' +1 day'));
          $eoday=date('Y-m-d', strtotime($soday.' +1 day'));
          $dayargs = array(
            'post_type'  => 'event',
            'posts_per_page' => -1,
            'meta_query' => array(
            'relation'=>'AND',
              array('key' => 'starts', 'compare' => '>=', 'value'=> $soday, type => 'DATE' ),
              array('key' => 'starts', 'compare' => '<', 'value'=> $eoday, type => 'DATE' )
            )
          );
          $the_dayevents = new WP_Query( $dayargs );
        ?>
      <?php endwhile; ?>
    </div>
    <a href="<?= get_the_permalink(42) ?>" class="button large">Mutasd a teljes órarendet</a>
  </aside>
  <button class="close-button" data-close aria-label="Close modal" type="button">
  <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php wp_reset_query(); ?>