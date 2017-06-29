<?php
/**
* Template Name: New Comer Template with FAQ
*/
?>
<?php while (have_posts()) : the_post(); ?>
<div class="ps ps--dark ps--largetop ps--twohalf">
  <div class="row">
    <div class="columns large-6">
      <ul class="facts">
        <li>Első alkalommal</li>
        <li><em>10</em> napos próbabérlet</li>
        <li><em>2&nbsp500</em> Ft </li>
      </ul>
      <br>
       <p class="heading__lead">Próbabérlettel kipróbálhatod az <a href="<?php the_permalink(206); ?>">összes jóga fajtát,</a> megismerheted az <a href="<?php the_permalink(76); ?>">oktatókat</a> és találkozhatsz, ismerkedhetsz a többi jógázóval és a környezettel. Semmilyen előképzettség vagy jógás múlt nem szükséges</p>
    </div>
  </div>
</div>
<div class="ps">
  <div class="row">
    <div class="columns content">
      <header class="heading">
        <h2 class="heading__title"><?php the_title(); ?></h2>
        <hr>
      <div class="heading__lead">
        <?php the_excerpt(); ?>
      </div>
      </header>
      <div class="twocolumnblock">
       <?php the_content(); ?>
      </div>
      <a href="<?php the_permalink(206); ?>" class="button">Válassz óránk közül!</a>
    </div>
  </div>
</div>
<div class="ps ps--opaque">
  <div class="row">
    <div class="columns tablet-8 tablet-centered xxlarge-6 xxlarge-uncentered">
      <div class="content">
        <?php the_field('content2'); ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>