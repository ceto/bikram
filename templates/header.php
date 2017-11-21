<section class="banner">
  <div class="row">
    <div class="columns">
      <div class="banner__wrap">
        <div class="banner__brand">
          <a class="banner__logo" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <nav class="banner__nav" role="navigation">
          <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--main']); ?>
        </nav>
        <div class="banner__actions">
          <a class="hide-for-large menutoggle" data-open="menumodal">
          <svg viewBox="0 0 20 20" class="icon icon--hamburger">
            <use xlink:href="<?=  get_stylesheet_directory_uri(); ?>/dist/images/icons.svg#icon--hamburger"></use>
          </svg><br>
          <?= __('Menü','bikram') ?></a>
          <a class="eventstoggle" data-open="eventsmodal">
            <svg viewBox="0 0 20 20" class="icon icon--calendar">
            <use xlink:href="<?=  get_stylesheet_directory_uri(); ?>/dist/images/icons.svg#icon--calendar"></use>
          </svg><br>
          <?= __('Órarend','bikram') ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


