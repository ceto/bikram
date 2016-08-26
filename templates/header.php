<header class="banner">
  <div class="row">
    <div class="columns">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <nav class="primarynav">
        <?php if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu']);
        endif; ?>
      </nav>
    </div>
  </div>
</header>