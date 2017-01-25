<?php
  $args = array(
    'post_type'  => 'class',
    'order' => 'ASC',
    'orderby'  => 'menu_order',
    'posts_per_page' => -1
  );
  $the_fclasses = new WP_Query( $args );
?>
<footer class="sitefooter">
  <div class="row">
    <div class="columns large-9">
      <div class="sitefooter__slogan">
        <div class="sitefooter__slogan">
          <small>Az Astorián</small>
          <p>Test nem marad szárazon</p>
        </div>
      </div>
      <ul class="sitefooter__classes">
        <?php while ($the_fclasses->have_posts()) : $the_fclasses->the_post(); ?>
          <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
      </ul>

    </div>
  </div>
  <div class="row">
    <div class="columns"><hr></div>
  </div>
  <div class="row">
    <div class="columns tablet-6">
      &copy; <?= date(Y) ?> Bikram Jóga Központ &middot; All rights reserved
    </div>
    <div class="columns tablet-6 large-text-right">
      Designed with care by <a taqget="_blank" href="http://hydrogene.hu">Hydrogene</a> &middot; Photo <a target="_blank" href="http://hydrogene.hu">G2 Photo</a>
    </div>
  </div>
</footer>
