<?php
/**
 * Template Name: Studio Template With Teachers' List
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <?php //get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>

  <?php get_template_part('templates/teachers', 'list'); ?>
    <section class="photostripe">
    <div class="photostripe__item">
      <img src="http://placehold.it/1200x800/2a2a2a?text=studiofoto 1." alt="">
      <img src="http://placehold.it/1200x800/333/?text=studiofoto 2." alt="">
      <img src="http://placehold.it/1200x800/000/?text=studiofotok" alt="">
      <img src="http://placehold.it/1200x800?text=studiofoto 1." alt="">
    </div>
  </section>
  <div class="ps ps--opaque">
    <div class="row">
      <div class="columns">
        <header class="heading">
        <h2 class="heading__title">Napfényes jógaterem az Astórián</h2>
        <hr>
        <p class="heading__lead">
          Központunk 2008-ban nyitotta meg kapuit a belváros szívében, az Astorián. 250 m<sup>2</sup> alapterületen kapott helyet a 125 m<sup>2</sup>-es tágas, napfényes jógaterem, melyben állandó légcserével, friss levegő befúvással biztosítjuk a kényelmes gyakorlást.</p>
        </header>
      </div>
    </div>
    <div class="row">
      <div class="columns tablet-6">
        <p>A pihenő részben meleg teával várunk, hogy ráhangolódhass az órára, gyakorlás után pedig friss almát kínálunk, ahol megoszthatod élményeidet oktatóddal és a többi jógázóval. Tágas öltözőinkben zuhanyzásra is van lehetőséged, melyhez a tusfürdőt és a sampont biztosítjuk számodra.</p>
      </div>
      <div class="columns tablet-6">
        <p>Ha nincs lehetőséged törölközőt hozni magaddal, recepciónkon zuhanyzáshoz és jógázáshoz való professzionális törölközőt is bérelhetsz. Ha saját jóga kiegészítőket szeretnél, stúdiókban jógamatracot, jóga törölközőt és a külön hot jógához kifejlesztett <a target="_balnk" href="http://dogdayswear.com">DogDays Yoga Wear</a> ruhákat is vásárolhatsz.</p>
      </div>
    </div>
    <div class="row">
      <div class="columns">
        <br>
        <a class="button" href="<?php the_permalink(120);  ?>">Térkép és megközelítés</a>
      </div>
    </div>
  </div>
  <section class="photostripe">
    <div class="photostripe__item">
      <img src="http://placehold.it/1200x800/2a2a2a?text=studiofoto 1." alt="">
      <img src="http://placehold.it/1200x800/333/?text=studiofoto 2." alt="">
      <img src="http://placehold.it/1200x800/000/?text=studiofotok" alt="">
      <img src="http://placehold.it/1200x800?text=studiofoto 1." alt="">
    </div>
  </section>
<!--   <section class="photostripe photostripe--narrow">
    <div id="instafeed"></div>
  </section> -->

