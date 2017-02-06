<?php use Roots\Sage\Titles; ?>
<header class="ps ps--dark ps--largetop">
  <div class="row">
    <div class="columns text-center">
      <h1>
          <?= Titles\title(); ?>
      </h1>
    </div>
<!--     <div class="columns large-text-right large-6">
      <?php
        $args = array(
          'post_type'  => 'class',
          'posts_per_page' => -1,
        );
        $the_classes = new WP_Query( $args );
      ?>
      <ul class="bloghead__catlist">
        <li class="cat-item cat-item-all <?= is_home()?'current-cat':'' ?>">
          <a href="<?php the_permalink(42); ?>"><?php _e('All','bikram') ?></a>
        </li>
        <?php while ($the_classes->have_posts()) : $the_classes->the_post(); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
      </ul>
    </div> -->
  </div>
</header>