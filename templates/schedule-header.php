<?php use Roots\Sage\Titles; ?>
<header class="ps ps--dark ps--largetop scheduleheader">
  <div class="row">
    <div class="columns text-center">
      <h1>
          <?= Titles\title(); ?><br><small>Nincs előre bejelentkezés, bármelyik órára jöhetsz.</small>
      </h1>
      <?php the_excerpt(); ?>
    </div>
  </div>
</header>