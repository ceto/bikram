<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('singleclass'); ?>>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="classleader">
    <div class="row">
      <div class="columns large-10 large-centered">
        <div class="classleader__naptar">
          <?php
          $args = array(
          'post_type'  => 'event',
          'posts_per_page' => -1,
          'meta_query' => array(
          'relation'=>'AND',
          array('key' => 'starts', 'compare' => '>=', 'value' => date('Y-m-d'), type => 'DATE' ),
          array('key' => 'class', 'compare' => '=', 'value' => $post->ID)
          ));
          $the_events = new WP_Query( $args );
          ?>
          <section role="marquee">
            <h3>Ezekre még odaérsz</h3>
            <div class="calendar calendar--full">
              <?php while ($the_events->have_posts()) : $the_events->the_post(); ?>
              <?php get_template_part('templates/calendar','entryclass'); ?>
              <?php endwhile; ?>
            </div>
          </section>
          <?php wp_reset_query(); ?>
        </div>
        <div class="text-center">
        <br><br><br>
        <a href="<?= get_the_permalink(42) ?>" class="button large">Mutasd a teljes órarendet</a>
        </div>
      </div>
    </div>
  </div>
  <div class="ps ps--dark">
    <div class="row">
      <div class="columns large-6">
        <ul class="facts">
          <li>korhatár nélkül</li>
          <li>90 perces óra</li>
          <li>40 <em>C&deg;</em> hőségben</li>
          <li>nincs házifeladat</li>
        </ul>
        <div class="classleader__lead">
          <?php
          global $more; $more = 0;
          the_excerpt();
          ?>
        </div>
      </div>
      <div class="columns large-6">
        <div class="content">
          <h2>Az óra részletei</h2>
          <?php $more=1; the_content('', TRUE); ?>
          <br>
          <a class="button" href="<?php the_permalink(120) ?>">Térkép és megközelítés</a>
        </div>
      </div>
    </div>
  </div>
  <footer class="singleclass__footer">
    <div class="row">
      <div class="columns">
      </div>
    </div>
  </footer>
  <?php //comments_template('/templates/comments.php'); ?>
</article>
<?php
wp_reset_query();
$args = array(
'post_type'  => 'class',
'order' => 'ASC',
'orderby'  => 'menu_order',
'posts_per_page' => -1,
'post__not_in' => array($post->ID)
);
$the_classes = new WP_Query( $args );
?>
<section id="classes" class="ps classlist ps--opaque">
  <header class="heading">
    <div class="row">
      <div class="columns">
        <h2 class="heading__title">További órák az Astorián</h2>
        <hr>
      </div>
    </div>
  </header>
  <div class="row large-up-3">
    <?php while ($the_classes->have_posts()) : $the_classes->the_post(); ?>
    <div class="column">
      <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    </div>
    <?php endwhile; ?>
  </div>
</section>
<?php endwhile; ?>