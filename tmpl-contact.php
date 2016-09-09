<?php
/**
 * Template Name: Contact Template With Google Map
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <?php get_template_part('templates/content', 'page'); ?>
  <div id="location">
    <div class="row">
      <div class="columns large-6">
        <img src="http://placehold.it/800x600?text=googlemaps" alt="">
      </div>
      <div class="columns large-6">
        <h2>Pontos cím</h2>
        <p>Megközelítés, elérhetőség. Busz metró villamos, odáig elvisz és visszahoz</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptate deserunt unde sed harum dolor odit porro necessitatibus ipsum id iste pariatur, inventore omnis molestiae sunt error, quis quasi esse.</p>
      </div>
    </div>
  </div>
<?php endwhile; ?>
