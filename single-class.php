<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('singleclass'); ?>>
  <header class="pagehead pagehead--singleclass">
    <div class="row">
      <div class="columns large-8">
        <h1 class="pagehead__title"><?php the_title(); ?></h1>
        <p class="pagehead__lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus cum pariatur neque doloribus magnam, vel mollitia sit consectetur veniam eaque facilis distinctio, ipsa. Veniam suscipit et magni porro, officia, at.</p>
        <div class="pagehead__actions">
          <a href="#" class="button">Részletek</a>
        </div>
      </div>
      <div class="section columns large-4">
        <?php
        $args = array(
          'post_type'  => 'event',
          'posts_per_page' => -1,
          'meta_query' => array(
            'relation'=>'AND',
            array('key' => 'starts', 'compare' => '>=', 'value' => date('Y-m-d'), type => 'DATE' ),
            array('key' => 'class', 'compare' => '=', 'value' => $post->ID)
          )
        );
        $the_events = new WP_Query( $args );
      ?>
      <section class="pagehead__schedule" role="marquee">
        <div class="calendar calendar--full">
          <h2>Közelgő órák</h2>
          <?php while ($the_events->have_posts()) : $the_events->the_post(); ?>
            <?php get_template_part('templates/calendar','entryfull'); ?>
          <?php endwhile; ?>
        </div>
      </section>

        <a href="<?= get_the_permalink(42) ?>" class="button small">Mutasd mindet</a><a href="<?= get_the_permalink(42) ?>" class="button small secondary">Órarend</a>
      </div>
    </div>
  </header>
  <div class="singleclass__content content">
    <div class="row">
      <div class="columns">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <footer class="singleclass__footer">
    <div class="row">
      <div class="columns">
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'bikram'), 'after' => '</p></nav>']); ?>
      </div>
    </div>
  </footer>
  <?php comments_template('/templates/comments.php'); ?>
</article>
<?php endwhile; ?>