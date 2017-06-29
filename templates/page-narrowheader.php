<?php use Roots\Sage\Titles; ?>
<header class="pagehead pagehead--narrow">
  <div class="pagehead__pics">
      <?php the_post_thumbnail(full); ?>
  </div>
  <div class="pagehead__content">
    <div class="row column">
        <h1 class="pagehead__title"><?= Titles\title(); ?></h1>
    </div>
  </div>
</header>