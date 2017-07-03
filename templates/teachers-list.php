<?php
$args = array(
'post_type'  => 'teacher',
'posts_per_page' => -1,
'orderby' => 'menu_order',
'order' => 'ASC'
);
$the_teachers = new WP_Query( $args );
?>
<section class="teachers" id="teachers" data-magellan-target="teachers">
    <div class="ps">
        <div class="row column">
            <div class="heading__lead"><?php the_excerpt(); ?></div>
        </div>
    </div>
    <div class="row small-up-2 tablet-up-3 large-up-4 xlarge-8 ps ps--notop">
        <?php while ($the_teachers->have_posts()) : $the_teachers->the_post(); ?>
        <div class="columns">
            <?php get_template_part('templates/teacher','card'); ?>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<?php wp_reset_postdata(); ?>