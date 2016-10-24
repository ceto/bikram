<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('singleteacher'); ?>>
  <header class="singleteacher__header">
    <div class="row">
      <div class="columns medium-4 medium-centered">
        <img src="http://placehold.it/600x600" alt="">
      </div>
    </div>
    <div class="row">
      <div class="columns large-10 large-centered xlarge-9">
        <h1 class="singleteacher__title"><?php the_title(); ?></h1>
      </div>
    </div>
  </header>
  <div class="singleteacher__content content">
    <div class="row">
      <div class="columns large-10 large-centered xlarge-9">
        <div class="lead">
          <?php
          global $more; $more = 0;
          the_excerpt();
          ?>
        </div>
        <?php $more=1; the_content('', TRUE); ?>
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
          <h2><?php the_title(); ?> órái</h2>
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