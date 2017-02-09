<?php get_template_part('templates/front', 'hero'); ?>
<?php  get_template_part('templates/sticky', 'block'); ?>
<div class="ps">
  <div class="row">
    <div class="columns tablet-6 large-7 xlarge-8">
      <header class="heading">
      <h2 class="heading__title">Bikram Jóga Központ</h2>
      <hr>
      <p class="heading__lead">Stúdiónkban <a href="<?php the_permalink(206); ?>">többféle jóga típus</a> közül választhatsz. Nincs előre bejelentkezés, bármelyik órán részt vehetsz függetlenül attól, hogy jógáztál-e már vagy sem. </p>
      </header>
      <p>Központunk 2008-ban nyitotta meg kapuit a belváros szívében, az Astorián. 250 m<sup>2</sup> alapterületen kapott helyet a 125 m<sup>2</sup>-es tágas, napfényes jógaterem, melyben állandó légcserével, friss levegő befúvással biztosítjuk a kényelmes gyakorlást.</p>
      <p>A pihenő részben meleg teával várunk, hogy ráhangolódhass az órára, gyakorlás után pedig friss almát kínálunk, ahol megoszthatod élményeidet oktatóddal és a többi jógázóval. Tágas öltözőinkben zuhanyzásra is van lehetőséged, melyhez a tusfürdőt és a sampont biztosítjuk számodra.</p>
      </p>Ha kilépnél a nyüzsgő belvárosból és egy kis nyugalomra, feltőtődésre vágynál, várunk tágas, napfényes termünkben az Astorián.</p>
      <br>
      <a href="<?php the_permalink(128); ?>" class="button">Tudnivalók kezdőknek</a>
      <a href="<?php the_permalink(206); ?>" class="button secondary">Jóga típusok</a>
    </div>
    <div class="columns tablet-6 large-5 xlarge-4">
      <?php
        $args = array(
        'post_type'  => 'event',
        'posts_per_page' => 6,
        'meta_query' => array('key' => 'starts', 'compare' => '>=', 'value' => date('Y-m-d'), type => 'DATE' )
        );
        $the_events = new WP_Query( $args );
        ?>
        <br><br>
        <section class="pagehead__schedule callout" role="marquee">
          <h4>Közelgő órák a stúdióban</h4>
          <div class="calendar calendar--teacher">
            <?php while ($the_events->have_posts()) : $the_events->the_post(); ?>
              <?php get_template_part('templates/calendar','entryteacher'); ?>
            <?php endwhile; ?>
          </div>
          <br>
          <a href="<?php the_permalink(42); ?>" class="button large expanded">Teljes órarend</a>
        </section>

    </div>
  </div>
</div>
    <section class="photostripe photostripe--narrow">
    <div class="photostripe__item">
      <img src="http://placehold.it/1200x800/2a2a2a?text=studiofoto 1." alt="">
      <img src="http://placehold.it/1200x800/333/?text=studiofoto 2." alt="">
      <img src="http://placehold.it/1200x800/000/?text=studiofotok" alt="">
      <img src="http://placehold.it/1200x800/333/?text=studiofoto 2." alt="">
      <img src="http://placehold.it/1200x800/333/?text=studiofoto 2." alt="">
      <img src="http://placehold.it/1200x800/000/?text=studiofotok" alt="">
      <img src="http://placehold.it/1200x800?text=studiofoto 1." alt="">
    </div>
  </section>

