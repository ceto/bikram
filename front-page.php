<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'templates/hero'); ?>
<?php get_template_part('templates/sticky', 'block'); ?>
<div class="ps">
  <div class="row">
    <div class="columns tablet-6 large-7 xlarge-8 content">
      <header class="heading">
      <h2 class="heading__title"><?php the_title(); ?></h2>
      <hr>
      <div class="heading__lead"><?php the_excerpt(); ?></div>
      </header>
      <?php the_content(); ?>
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
<?php get_template_part('templates/widegallery'); ?>
<?php endwhile; ?>
