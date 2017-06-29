<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('singleclass'); ?>>
  <?php get_template_part('templates/class', 'header'); ?>
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
            <h3><?php the_title(); ?> időpontok</h3>
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
  <div class="ps ps--dark ps--largebottom">
    <div class="row">
      <div class="columns large-6">
        <?php if (have_rows('quote')): ?>
        <ul class="facts">
          <?php while ( have_rows('quote') ) : the_row(); ?>
            <li><?php the_sub_field('quote_row') ?></li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      </div>
      <div class="columns large-6">
        <div class="classleader__lead">
          <?php the_excerpt(); ?>
        </div>
      </div>
    </div>
  </div>
  <footer class="singleclass__footer ps">
    <div class="row">
      <div class="columns tablet-8">
        <div class="content">
          <?php the_content(); ?>
          <br>
          <a class="button" href="<?php the_permalink(120) ?>">Térkép és megközelítés</a>
        </div>
      </div>
      <div class="columns tablet-4">
        <?php
          wp_reset_query();
          $args = array(
            'post_type'  => 'teacher',
            'order' => 'ASC',
            'orderby'  => 'menu_order',
            'posts_per_page' => -1,
            'post__not_in' => array($post->ID)
          );
          $the_teachers = new WP_Query( $args );
        ?>
          <section id="teachers">
            <h5 class="text-center">Az órát tartják&hellip;</h5>
            <br>
            <div class="owl-carousel teacher-carousel">
              <?php while ($the_teachers->have_posts()) : $the_teachers->the_post(); ?>
              <div class="item">
                <?php get_template_part('templates/teacher','card'); ?>
              </div>
              <?php endwhile; ?>
            </div>
          </section>
        </div>
    </div>
  </footer>
  <?php //comments_template('/templates/comments.php'); ?>
</article>

<div class="ps ps--opaque">
  <div class="row">

    <div class="columns">
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
      <section id="classes">
        <h5>Ismerd meg a többi órát is&hellip;</h5>
        <br>
        <div class="owl-carousel class-carousel">
          <?php while ($the_classes->have_posts()) : $the_classes->the_post(); ?>
          <div class="item">
            <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
          </div>
          <?php endwhile; ?>
        </div>
      </section>
    </div>
  </div>
</div>

<?php endwhile; ?>
<?php get_template_part('templates/sticky', 'block'); ?>