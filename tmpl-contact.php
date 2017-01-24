<?php
/**
* Template Name: Contact Template With Google Map
*/
?>
<?php while (have_posts()) : the_post(); ?>
<?php //get_template_part('templates/page', 'header'); ?>
<div class="ps">
  <div class="row">
    <div class="columns">
      <h1 class="heading__title"><?php the_title(); ?></h1>
      <hr>
      <div class="heading__lead"><?php the_content(); ?></div>
    </div>
  </div>
</div>
<div class="ps ps--narrow">
  <div class="row">
    <div class="columns medium-6 large-3">
      <h3>Helyszín</h3>
      <p><strong>Bikram Jóga Központ</strong><br>
        H-1075 Budapest,<br>
        Károly krt. 1.<br>
      Félemelet 3</p>
      <p><strong>Kapunyitás és bérletvásárlás:</strong><br>Fél órával az <a href="<?php the_permalink(42); ?>">órák</a> kezdete előtt</p>
    </div>
    <div class="columns medium-6 large-3">
      <h3>Hívj vagy írj</h3>
      <p><strong>Telefon:</strong><br>
        <a href="tel:+3613280774">+36 (1) 328 0774</a></p>
        <p><strong>E-mail:</strong><br>
          <a href="mailto:info@bikram.hu">info@bikram.hu</a></p>
          <p><strong>És még:</strong><br>
            <a href="#">Facebook</a>, <a href="#">Instagram</a></p>
      </div>
      <div class="columns large-6">
            <h3>Megközelítés</h3>
            <p><strong>Tömegközlekedéssel:</strong> M2-es metróval, 7, 78, 9-es busszal, 47-49-es villamossal leszállás az Astoria megállónál, illetve pár perc séta a Deák tértől.</p>
            <p><strong>Autóval:</strong> Paroklási lehetősé a lorem ipsumban van. 2 óra parkolás 800Ft. vagy megállhatsz a kisutcákban, ahol lorem ipsum dolor sit amet. Onnan 4 perc séta a.</p>
            <p><a href="#">útvonaltervezés&hellip;</a></p>
          </div>
        </div>
      </div>
      <div class="row ps">
        <div class="columns">
          <img src="http://placehold.it/1600x500/?text=googlemaps" alt="">
        </div>
      </div>
      <?php endwhile; ?>