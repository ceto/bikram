<header class="banner">
  <div class="row">
    <div class="columns">
      <a data-open="menumodal" class="menutoggle">Menü</a>
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <div class="banner__events">
        <a data-open="eventsmodal" class="eventstoggle">Órarend</a>
      </div>
    </div>
  </div>
</header>
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
