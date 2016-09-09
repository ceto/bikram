<section class="ps">
<div class="row">
  <div class="columns">
    <div class="page__content content">
      <?php the_content(); ?>
    </div>
    <?php wp_link_pages(['before' => '<nav class="pagenav"><p>' . __('Pages:', 'bikram'), 'after' => '</p></nav>']); ?>
  </div>
</div>
</section>

