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
          <a class="button small eventstoggle" data-open="eventsmodal">Órarend</a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="reveal large menumodal fast" id="menumodal" data-reveal data-animation-in="slide-in-down" data-animation-out="slide-out-up">
  <img src="http://placehold.it/300x300" alt="">
  <p class="lead">Jóga jóga és métöbb jóga.</p>
  <nav class="primarynav">
    <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--main']); ?>
  </nav>
  <button class="close-button" data-close aria-label="Close modal" type="button">
  <span aria-hidden="true">&times;</span>
  </button>
</div>
