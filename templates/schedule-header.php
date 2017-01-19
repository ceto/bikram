<?php use Roots\Sage\Titles; ?>
<header class="bloghead ps ps--narrow">
  <div class="row">
    <div class="columns large-6">
      <h2 class="bloghead__title">
        <a href="<?php the_permalink(42); ?>">
          <?= Titles\title(); ?>
        </a>
      </h2>
    </div>
    <div class="columns large-text-right large-6">
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
    </div>
  </div>
</header>