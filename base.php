<?php
  use Roots\Sage\Setup;
  use Roots\Sage\Wrapper;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <?php if ((!defined('WP_ENV') || \WP_ENV === 'production') && !current_user_can('manage_options')) : ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WD5S4DT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php endif; ?>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'bikram'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="document" role="document">
      <main class="main <?= (Setup\display_sidebar())?'main--hassidebar':'';  ?>">
          <?php include Wrapper\template_path(); ?>
      </main><!-- /.main -->
      <?php if (Setup\display_sidebar()) : ?>
      <aside class="sidebar sidebar--main">
        <?php include Wrapper\sidebar_path(); ?>
      </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.document -->
    <?php get_template_part('templates/events','modal'); ?>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
