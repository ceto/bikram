<div class="reveal full menumodal fast" id="menumodal" data-overlay="false" data-v-offset="0" data-show-delay="0" data-hide-delay="0" data-reveal data-animation-in="fade-in" data-animation-out="fade-out">
  <div class="menumodal__inner">
    <nav class="mobilenav">
      <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu vertical menu--mobile']); ?>
    </nav>
  </div>
  <button class="close-button" data-close aria-label="Close modal" type="button">
  <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="reveal eventsmodal full fast" id="eventsmodal" data-overlay="false" data-v-offset="0" data-show-delay="0" data-hide-delay="0" data-reveal data-animation-in="fade-in" data-animation-out="fade-out">
<div class="eventsmodal__inner">
  <?php
    $soday=date('Y-m-d');
    $eoday=date('Y-m-d', strtotime($soday.' +1 day'));
  ?>

  <aside role="marquee">
    <div class="owl-carousel minical-carousel">
      <?php for ($i=1; $i<=8; $i++): ?>
        <div class="item">
          <?php
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
          <div class="minical">
            <h3 class="minical__daytitle">
              <?= date_i18n('l' , strtotime($soday) ); ?>
              <small><?= date_i18n('Y. F d.', strtotime($soday) ); ?></small>
            </h3>
            <div class="callout">
              <?php if (($the_dayevents->found_posts)>0) : ?>
                <div class="calendar calendar--mini">
                  <?php while ($the_dayevents->have_posts()) : $the_dayevents->the_post(); ?>
                    <?php get_template_part('templates/calendar','entry'); ?>
                  <?php endwhile; ?>
                </div>
              <?php else: ?>
                <h4><?= __('Ezen a napon nincs meghirdetve óra.','bikram') ?></h4>
                <hr>
                <p><?= __('Ne add fel! Más napokon biztos találsz kedvedre valót. Lapozz tovább vagy nézd meg a','bikram') ?> <a href="<?= get_the_permalink(42) ?>"><?= __('teljes órarendet.','bikram') ?></a></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php
          $soday=date('Y-m-d', strtotime($soday.' +1 day'));
          $eoday=date('Y-m-d', strtotime($soday.' +1 day'));
        ?>
      <?php endfor; ?>
    </div>
    <a href="<?= get_the_permalink(42) ?>" class="button expanded large"><?= __('Teljes órarend','bikram') ?></a>
  </aside>
</div>
  <button class="close-button" data-close aria-label="Close modal" type="button">
  <span aria-hidden="true">&times;</span>
  </button>

</div>
<?php wp_reset_query(); ?>