<?php get_template_part('templates/front', 'hero'); ?>
<?php  get_template_part('templates/sticky', 'block'); ?>
<div class="ps">
  <div class="row">
    <div class="columns tablet-6 large-7 xlarge-8">
      <header class="heading">
      <h2 class="heading__title">Bikram Jóga Központ</h2>
      <hr>
      <p class="heading__lead">Stúdiónkban <a href="<?php the_permalink(206); ?>">többféle jóga típus</a> közül választhatsz és bármelyik órán részt vehetsz függetlenül attól, hogy jógáztál-e már vagy sem. Érkezz bárhonnan, bármilyen múlttal vagy jelennel, segítünk, hogy testileg és lelkileg is kiegyensúlyozottabbá és erősebbé válj.</p>
      </header>
      <p>Akár fizikai panaszaid vannak, akár fogyni vagy erősödni szeretnél, esetleg lelki nehézségkbe ütköztél, a legjobb helyen jársz. Készülj fel, hogy nálunk izzadni fogsz úgy, mint még soha, olyan izmaidat is megérzed, amikről eddig fogalmad sem volt, de legfőképpen megismered a tested és megtanulod értékelni önmagad.
      </p>
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

