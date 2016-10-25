<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('singleclass'); ?>>
  <?php get_template_part('templates/page', 'header'); ?>

  <div class="classleader">
    <div class="row">
      <div class="columns large-7">
        <div class="lead">
            <?php
            global $more; $more = 0;
            the_excerpt();
            ?>
        </div>
      </div>
      <div class="columns large-5  classleader__naptar">
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
          <h2>Ezekre még odaérsz</h2>

          <div class="calendar calendar--full">
            <?php while ($the_events->have_posts()) : $the_events->the_post(); ?>
              <?php get_template_part('templates/calendar','entryclass'); ?>
            <?php endwhile; ?>
          </div>
        </section>
        <a href="<?= get_the_permalink(42) ?>" class="button small">Mutasd mindet</a><a href="<?= get_the_permalink(42) ?>" class="button small secondary">Órarend</a>
        <?php wp_reset_query(); ?>
      </div>

    </div>
  </div>

  <div class="singleclass__content content ps ps--opaque">
    <div class="row">
      <div class="columns large-7">
      <h2>Az óra részletei</h2>
        <?php $more=1; the_content('', TRUE); ?>
        <br>
        <a class="button" href="<?php the_permalink(120) ?>">Térkép és megközelítés</a>
      </div>
      <div class="columns large-5">
          <h2>Tanárok</h2>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis atque aliquid blanditiis itaque ut minima, minus fuga soluta. Soluta adipisci quibusdam distinctio repellat doloribus eos, veritatis provident. Libero, voluptates voluptatibus.</p>
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
<section id="classes" class="ps classlist">
  <header class="heading">
    <div class="row">
      <div class="columns">
        <h2 class="heading__title">További órák az Astorián</h2>
        <hr>
      </div>
    </div>
  </header>

  <div class="row large-up-2">
    <?php while ($the_classes->have_posts()) : $the_classes->the_post(); ?>
    <div class="column">
      <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    </div>
    <?php endwhile; ?>
  </div>
</section>
<?php endwhile; ?>