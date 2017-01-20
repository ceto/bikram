<?php
/**
 * Template Name: New Comer Template with FAQ
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <!-- <?php get_template_part('templates/page', 'header'); ?> -->

  <?php //get_template_part('templates/content', 'page'); ?>
  <div class="ps ps--dark">
    <div class="row">
      <div class="columns large-6">
        <ul class="facts">
          <li>10 napos próbabérlet</li>
          <li><em>2&nbsp500</em>  Ft-ért</li>
          <li>első alkalommal</li>
        </ul>
      </div>
      <div class="columns large-6">
        <div class="lead">
          <p>Kipróbálhatod az összes jóga fajtát, megismerheted az oktatókat és találkozhatsz, ismerkedhetsz a többi jógázóval és a környezettel. Semmilyen előképzettség vagy jógás múlt nem szükséges</p>
        </div>
      </div>
    </div>
  </div>
<!--   <div class="ps ps--opaque">
    <div class="row">
      <div class="columns">
        <div class="lead">
          <?php
          global $more; $more = 0;
          the_excerpt();
          ?>
        </div>
      </div>
    </div>
  </div> -->

  <div class="ps ps--dark">
    <div class="row">
      <div class="columns large-6">
        <?php $more=1; the_content('', TRUE); ?>
      </div>
    </div>
  </div>
  <div class="ps">
    <div class="row">
      <div class="columns large-6 large-push-6">
        <h2>Jóga etikett</h2>
        <ul>

          <li>Kérjük érkezz időben! A későket, a többi jógázó és az oktatóra való tekintettel, sajnos nem áll módunkban beengedni.</li>

          <li>Mobiltelefonodat hagyd az öltöző szekrényben lehalkítva, hogy senkit se zavarjon. A terembe bevinni szigorúan tilos! Ha mégis elfeledkeztél róla, oktatód kiviszi a recepcióra, ahol biztonságban lesz az óra alatt.</li>

          <li>Kerüld az erős illatok, mentolos bemelegítő krémek használatát. Ha úgy érzed szükséges, nyugodtan zuhanyozz le óra előtt.</li>

          <li>Kérjük, a teremben lévő fűtőtestekhez ne nyúlj hozzá és ne kapcsold ki őket. Bízz az oktatódban, hogy tudja, milyen hőmérséklet szükséges ahhoz, hogy biztonságosan kihozd a maximumot a gyakorlásodból. Ha valamelyik fűtőtest mégis zavarna, jelezd oktatódnak és megoldja a helyzetet.</li>

          <li>Próbálj meg végig bent maradni a teremben. Ha mégis ki kellene menned a mosdóba, azt a gyakorlatok közti rövid szünetben tedd.</li>

          <li>Ha beteg vagy, adj időt magadnak a teljes gyógyulásra és csak utána térj vissza gyakorolni.</li>

        </ul>
      </div>
    </div>
  </div>
  <section class="photostripe">
    <div class="photostripe__item">
      <img src="http://placehold.it/1200x800/2a2a2a?text=hangulatfoto 1." alt="">
      <img src="http://placehold.it/1200x800/333/?text=hangulatfoto 2." alt="">
      <img src="http://placehold.it/1000x1000/e60376" alt="">
      <img src="http://placehold.it/1200x800/000/?text=hangulatfotok" alt="">
      <img src="http://placehold.it/1200x800?text=hangulatfoto 1." alt="">
    </div>
  </section>
<?php endwhile; ?>
