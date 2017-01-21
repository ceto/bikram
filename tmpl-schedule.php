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
      <div class="columns large-12 large-centered xxlarge-12">
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


<section id="classes" class="classlist ps ps--opaque">
  <header class="heading">
    <div class="row">
      <div class="columns">
        <h2 class="heading__title">Jóga órák az Astorián</h2>
        <hr>
        <p class="heading__lead">Bármelyik órán részt vehetsz függetlenül attól, hogy jógáztál-e már vagy sem. Érkezz bárhonnan, bármilyen múlttal vagy jelennel, segítünk, hogy testileg és lelkileg is kiegyensúlyozottabbá és erősebbé válj. Válassz óráink közül, ha fogyni vagy erősödni szeretnél, ha fizikai panaszaid vannak, esetleg lelki nehézségkbe ütköztél.</p>
      </div>
    </div>
  </header>
  <div class="row large-up-2 ">
    <?php while ($the_classes->have_posts()) : $the_classes->the_post(); ?>
      <div class="column">
        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
      </div>
    <?php endwhile; ?>
  </div>

</section>

<?php get_template_part('templates/sticky', 'block'); ?>
