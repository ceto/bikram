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
    <div class="columns large-7">
      <div class="sitefooter__slogan">
        <div class="sitefooter__slogan">
          <small>Az Astorián</small>
          <p>Test nem marad szárazon</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="columns tablet-9">
      <ul class="sitefooter__classes">
        <?php while ($the_fclasses->have_posts()) : $the_fclasses->the_post(); ?>
          <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
      </ul>
    </div>
    <div class="columns tablet-3">
      <ul class="sitefooter__socials">
        <li><a href="https://www.facebook.com/bikramjogakozpont" target="_blank">
          <svg viewBox="0 0 20 20" class="icon icon--facebook">
            <use xlink:href="<?=  get_stylesheet_directory_uri(); ?>/dist/images/icons.svg#icon--facebook"></use>
          </svg>
        </a></li>
        <li><a href="https://www.instagram.com/bikramyogabudapest/" target="_blank">
          <svg viewBox="0 0 20 20" class="icon icon--instagram">
            <use xlink:href="<?=  get_stylesheet_directory_uri(); ?>/dist/images/icons.svg#icon--instagram"></use>
          </svg>
        </a></li>
        <li><a href="<?php the_permalink(120); ?>">
          <svg viewBox="0 0 20 20" class="icon icon--logocircle">
            <use xlink:href="<?=  get_stylesheet_directory_uri(); ?>/dist/images/icons.svg#icon--logocircle"></use>
          </svg>
        </a></li>
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
    <div class="columns tablet-6 tablet-text-right">
      Designed with care by <a taqget="_blank" href="http://hydrogene.hu">Hydrogene</a> &middot; Photo <a target="_blank" href="http://g2foto.hu/">G2Foto</a>
    </div>
  </div>
</footer>
