<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('singleclass'); ?>>
  <header class="pagehead pagehead--singleclass ps">
    <div class="row">
      <div class="columns large-8">
        <div class="pagehead__content">
          <h1 class="pagehead__title"><?php the_title(); ?></h1>
          <p class="pagehead__lead">
            <?php
            global $more; $more = 0;
            the_excerpt();
            ?>
          </p>
          <div class="pagehead__actions">
            <a href="#" class="button">Ugrás az órarendre</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="singleclass__content content ps">
    <div class="row">
      <div class="columns large-8">
        <?php $more=1; the_content('', TRUE); ?>
        <br>
        <a class="button" href="<?php the_permalink(120) ?>">Térkép és megközelítés</a>
      </div>
      <div class="columns large-4">
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
        <section class="pagehead__schedule callout" role="marquee">
          <div class="calendar calendar--full">
            <h2><?php the_title(); ?> órák</h2>
            <?php while ($the_events->have_posts()) : $the_events->the_post(); ?>
            <?php get_template_part('templates/calendar','entryfull'); ?>
            <?php endwhile; ?>
          </div>
        </section>
        <a href="<?= get_the_permalink(42) ?>" class="button small">Mutasd mindet</a><a href="<?= get_the_permalink(42) ?>" class="button small secondary">Órarend</a>
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
<section id="classes" class="ps ps--opaque classlist">
  <div class="row large-up-2">
    <?php while ($the_classes->have_posts()) : $the_classes->the_post(); ?>
    <div class="column">
      <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    </div>
    <?php endwhile; ?>
  </div>
</section>
<?php endwhile; ?>