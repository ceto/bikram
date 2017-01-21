<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('singleteacher'); ?>>
  <header class="singleteacher__header ps ps--dark ps--largetop">
    <div class="row">

      <div class="columns medium-4">
        <img src="http://lorempixel.com/768/768/people" alt="">
        <!-- <h1 class="singleteacher__title"><?php the_title(); ?></h1> -->
      </div>
      <div class="columns medium-8">



        <ul class="facts">
          <?php if (have_rows('quote')): ?>
          <?php while ( have_rows('quote') ) : the_row(); ?>
            <li><?php the_sub_field('quote_row') ?></li>
          <?php endwhile; ?>
          <?php else: ?>
            <li>Ha ebbe nem</li>
            <li><em>haltam</em> bele</li>
            <li>akkor már soha</li>
            <li>semmibe se fogok</li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </header>
  <div class="singleteacher__content content ps ps--opaque">
    <div class="row">
      <div class="columns large-6 xlarge-8">
        <h1><?php the_title(); ?></h1>
        <div class="lead">
          <?php
          global $more; $more = 0;
          the_excerpt();
          ?>
        </div>
        <?php $more=1; the_content('', TRUE); ?>
      </div>
      <div class="columns large-6 xlarge-4">
        <?php
        $args = array(
        'post_type'  => 'event',
        'posts_per_page' => -1,
        'meta_query' => array(
        'relation'=>'AND',
        array('key' => 'starts', 'compare' => '>=', 'value' => date('Y-m-d'), type => 'DATE' ),
        array('key' => 'teacher', 'compare' => '=', 'value' => $post->ID)
        )
        );
        $the_events = new WP_Query( $args );
        ?>
        <section class="pagehead__schedule callout" role="marquee">
          <h3><?php the_field('nick_name'); ?> következő órái</h3>
          <hr>
          <div class="calendar calendar--teacher">
            <?php while ($the_events->have_posts()) : $the_events->the_post(); ?>
              <?php get_template_part('templates/calendar','entryteacher'); ?>
            <?php endwhile; ?>
          </div>
        </section>
      </div>
    </div>
  </div>
  <footer class="singleteacher__footer">
    <div class="row">
      <div class="columns">
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'bikram'), 'after' => '</p></nav>']); ?>
      </div>
    </div>
  </footer>
  <?php //comments_template('/templates/comments.php'); ?>
</article>
<?php endwhile; ?>