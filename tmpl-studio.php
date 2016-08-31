<?php
/**
 * Template Name: Studio Template With Teachers' List
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <?php //get_template_part('templates/content', 'page'); ?>
  <div class="ps">
    <div class="row">
      <div class="columns">
        <h2>MANIFESTO: Nem vagyunk merevek, lazák szabadok barátságosak</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam laborum hic optio dolor ratione illum unde ullam tempora. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis laudantium quae, voluptatem sit eum placeat provident atque recusandae porro magni cum reiciendis accusamus tenetur iure unde. Aperiam quis neque, nostrum. facere voluptatem? Debitis eligendi praesentium voluptatibus. Quae vitae numquam placeat earum consequuntur?</p>
        <img src="http://placehold.it/1920x600?text=hangulatfotok" alt="">
      </div>
    </div>
  </div>
  <div class="ps">
    <div class="row">
      <div class="columns">
        <h2>Szuper stúdiónk van az Astórián van benne jakuzzi</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam laborum hic optio dolor ratione illum unde ullam tempora facere voluptatem? Debitis eligendi praesentium voluptatibus. Quae vitae numquam placeat earum consequuntur?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptate deserunt unde sed harum dolor odit porro necessitatibus ipsum id iste pariatur, inventore omnis molestiae sunt error, quis quasi esse.</p>
        <p><a class="button" href="<?php the_permalink(120); ?>">Megközelítés, elérhetőség</a></p>
        <img src="http://placehold.it/1920x600?text=studiofotok" alt="">
      </div>
    </div>
  </div>
  <?php get_template_part('templates/teachers', 'list'); ?>
<?php endwhile; ?>
