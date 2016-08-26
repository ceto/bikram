<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('singlepost'); ?>>
  <header class="singlepost__header">
    <div class="row">
      <div class="columns">
        <h1 class="singlepost__title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
    </div>
  </header>
  <div class="singlepost__content content">
    <div class="row">
      <div class="columns">
        <?php the_content(); ?>
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
  <?php comments_template('/templates/comments.php'); ?>
</article>
<?php endwhile; ?>