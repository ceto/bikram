<?php get_template_part('templates/blog', 'header'); ?>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('singlepost'); ?>>
  <header class="singlepost__header posthead ps ps--narrow">
    <div class="row">
      <div class="columns large-12 large-centered xlarge-12">

        <?php if ( get_field('hasdate')==0 ) : ?>
          <?php get_template_part('templates/entry-meta'); ?>
          <h1 class="singlepost__title"><?php the_title(); ?></h1>
        <?php else: ?>
          <h1 class="singlepost__title"><?php the_title(); ?></h1>
          <?php get_template_part('templates/entry-meta'); ?>
        <?php endif; ?>
        <div class="lead">
          <?php
          global $more; $more = 0;
          the_excerpt();
          ?>
        </div>
      </div>
    </div>
  </header>
  <div class="singlepost__content content ps ps--narrow">
    <div class="row">
      <div class="columns large-10 large-centered xlarge-9">
        <?php if ( has_post_thumbnail() ) : ?>
        <figure class="post__featimage">
          <?php the_post_thumbnail(large); ?>
          <figcaption><?php the_title(); ?></figcaption>
        </figure>
      <?php endif; ?>
        <?php $more=1; the_content('', TRUE); ?>
      </div>
    </div>
  </div>
  <footer class="singlepost__footer">
    <div class="row">
      <div class="columns">
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'bikram'), 'after' => '</p></nav>']); ?>
      </div>
    </div>
  </footer>
  <?php //comments_template('/templates/comments.php'); ?>
</article>
<?php endwhile; ?>
<?php get_template_part('templates/sticky', 'block'); ?>