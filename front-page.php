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
        <?php wp_reset_postdata(); ?>

    </div>
  </div>
</div>
<div class="ps ps--dark">
  <div class="row">
    <div class="columns xlarge-8 content">
            <?php
        $args = array(
          'post_type'  => 'class',
          'order' => 'ASC',
          'orderby'  => 'menu_order',
          'posts_per_page' => -1
        );
        $the_classes = new WP_Query( $args );
      ?>
      <div class="row tablet-up-2">
    <?php while ($the_classes->have_posts()) : $the_classes->the_post(); ?>
      <div class="column">
        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
      </div>
    <?php endwhile; ?>
  </div>
      <?php wp_reset_postdata(); ?>
    </div>
    <div class="columns xlarge-4">
        <div class="row">
          <div class="columns tablet-6 xlarge-12 tablet-centered">
            <img src="<?= get_template_directory_uri().'/dist/images/AYCM_ELFOGADOHELY.jpg'  ?>" alt="AYMC elfogadóhely">
          </div>
        </div>
    </div>
  </div>
</div>

<?php get_template_part('templates/widegallery'); ?>
<?php endwhile; ?>
