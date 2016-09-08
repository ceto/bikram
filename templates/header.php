<header class="banner">
  <a data-open="menumodal" class="menutoggle">Menü</a>
  <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  <div class="banner__events">
    <a data-open="eventsmodal" class="eventstoggle">Órarend</a>
  </div>
</header>

<div class="reveal large menumodal" id="menumodal" data-reveal data-animation-in="slide-in-down" data-animation-out="slide-out-up">
  <img src="http://placehold.it/300x300" alt="">
  <p class="lead">Jóga jóga és métöbb jóga.</p>
  <nav class="primarynav">
    <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--main']); ?>
  </nav>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="reveal eventsmodal" id="eventsmodal" data-reveal data-animation-in="slide-in-right" data-animation-out="slide-out-right">
  <h3>Becsúszó órarend</h3>
  <p>Javasolt működés és formára <a target="_blank" href="http://yogawerkstatt-hannover.de/" class="button small alert">Példa</a></p>
 <?php
        $todayargs = array(
          'post_type'  => 'event',
          'posts_per_page' => -1,
          'meta_query' => array(
            'relation'=>'AND',
            array('key' => 'starts', 'compare' => '>=', 'value'=> date('Y-m-d'), type => 'DATE' ),
            array('key' => 'starts', 'compare' => '<', 'value'=> date('Y-m-d', strtotime('tomorrow')), type => 'DATE' )
          )
        );
        $the_eventstoday = new WP_Query( $todayargs );
        $tomorrowargs = array(
          'post_type'  => 'event',
          'posts_per_page' => -1,
          'meta_query' => array(
            'relation'=>'AND',
            array('key' => 'starts', 'compare' => '>', 'value'=> date('Y-m-d'), type => 'DATE' ),
            array('key' => 'starts', 'compare' => '<', 'value'=> date('Y-m-d', strtotime('+2 day')), type => 'DATE' )
          )
        );
        $the_eventstomorrow = new WP_Query( $tomorrowargs );
      ?>
      <section class="hero__schedule" role="marquee">

        <ul class="tabs" data-tabs id="calendar-tabs">
          <li class="tabs-title is-active"><a href="#caltoday" aria-selected="true">Ma</a></li>
          <li class="tabs-title"><a href="#caltomorrow">Holnap</a></li>
        </ul>
        <div class="tabs-content" data-tabs-content="calendar-tabs">
          <div class="tabs-panel is-active" id="caltoday">
            <div class="calendar calendar--mini">
              <?php while ($the_eventstoday->have_posts()) : $the_eventstoday->the_post(); ?>
                <?php get_template_part('templates/calendar','entry'); ?>
              <?php endwhile; ?>
            </div>
          </div>
          <div class="tabs-panel" id="caltomorrow">
            <div class="calendar calendar--mini">
              <?php while ($the_eventstomorrow->have_posts()) : $the_eventstomorrow->the_post(); ?>
                <?php get_template_part('templates/calendar','entry'); ?>
              <?php endwhile; ?>
            </div>
          </div>

        </div>
        <a href="<?= get_the_permalink(42) ?>" class="button small">Teljes órarend</a>

      </section>

  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>