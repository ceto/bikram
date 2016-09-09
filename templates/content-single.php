<?php get_template_part('templates/blog', 'header'); ?>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('singlepost ps'); ?>>
  <header class="singlepost__header">
    <div class="row">
      <div class="columns large-10 large-centered xlarge-9">
        <h1 class="singlepost__title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
       </div>
    </div>
  </header>
  <div class="singlepost__content content">
    <div class="row">
      <div class="columns large-10 large-centered xlarge-9">
        <div class="lead">
          <?php
            global $more; $more = 0;
            the_excerpt();
          ?>
        </div>
        <hr>
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