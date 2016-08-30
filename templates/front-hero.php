<section class="hero hero--front ps">
  <div class="row">
    <div class="columns large-8">
      <div class="hero__content">
        <h1>Szuper felütés kell ide amitől lehasalsz</h1>
        <p>ide meg a lead Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste modi deserunt animi obcaecati aut maxime itaque consequatur, nemo adipisci.</p>
        <a href="#" class="button">Tudnivalók kezdőknek</a>
      </div>
    </div>
    <div class="columns large-4">
      <?php
        $todayargs = array(
          'post_type'  => 'event',
          'posts_per_page' => -1,
          'meta_query' => array(
            'relation'=>'AND',
            array('key' => 'starts', 'compare' => '>=', 'value'=> date('Y-m-d'), type => 'DATE' ),
            array('key' => 'starts', 'compare' => '<', 'value'=> date('2016-08-31'), type => 'DATE' )
          )
        );
        $the_eventstoday = new WP_Query( $todayargs );
        $tomorrowargs = array(
          'post_type'  => 'event',
          'posts_per_page' => -1,
          'meta_query' => array(
            'relation'=>'AND',
            array('key' => 'starts', 'compare' => '>', 'value'=> date('Y-m-d'), type => 'DATE' ),
            array('key' => 'starts', 'compare' => '<', 'value'=> date('2016-09-01'), type => 'DATE' )
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




    </div>
  </div>
</section>