<?php use Roots\Sage\Titles; ?>
<header class="pagehead">
  <div class="pagehead__pics">
      <?php the_post_thumbnail(full); ?>
  </div>
  <div class="pagehead__content">
    <div class="row">
      <div class="columns">
        <h1 class="pagehead__title"><?= Titles\title(); ?></h1>
        <h2 class="pagehead__subtitle">Lorem ipsum dolor sit amet</h2>
      </div>
    </div>
  </div>
</header>