<?php get_template_part('templates/front', 'hero'); ?>
<?php  get_template_part('templates/sticky', 'block'); ?>
<?php
  $args = array(
    'post_type'  => 'class',
    'order' => 'ASC',
    'orderby'  => 'menu_order',
    'posts_per_page' => -1
  );
  $the_classes = new WP_Query( $args );
?>


<section id="classes" class="classlist">
  <header class="heading">
    <div class="row">
      <div class="columns">
        <h2 class="heading__title">Jóga órák az Astorián</h2>
        <a class="button heading__button" href="<?php the_permalink(42) ?>">Ugrás az órarendre</a>
          <hr>
        <!-- <h3 class="heading__subtitle">Lorem ipsum dolor sit amet</h3> -->
        <p class="heading__lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dicta nisi, cupiditate illum explicabo voluptates veniam tenetur sed quo ab, exercitationem sunt vero adipisci officiis. Sunt doloribus, enim impedit? Dolorem.</p>

      </div>
    </div>
  </header>
  <div class="row large-up-2 ">
    <?php while ($the_classes->have_posts()) : $the_classes->the_post(); ?>
      <div class="column">
        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
      </div>
    <?php endwhile; ?>
  </div>

</section>
