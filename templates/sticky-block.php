<?php
  $sticky = get_option( 'sticky_posts' );
  $args = array(
    'post_type'  => 'post',
    'posts_per_page' => 1,
    'post__in'            => $sticky,
    'ignore_sticky_posts' => 1,
    'post__not_in' => array($post->ID)
  );
  $the_sticky = new WP_Query( $args );
  if ( $sticky[0] && ( ($sticky[0] !== $post->ID) || (is_archive()) ) ) :
?>
  <?php while ($the_sticky->have_posts()) : $the_sticky->the_post(); ?>
    <?php get_template_part('templates/content', 'sticky'); ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>