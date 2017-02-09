<?php
/**
* Template Name: New Comer Template with FAQ
*/
?>
<?php while (have_posts()) : the_post(); ?>
<!-- <?php get_template_part('templates/page', 'header'); ?> -->
<?php //get_template_part('templates/content', 'page'); ?>
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
        <h2 class="heading__title">Így készülj az órára</h2>
        <hr>
      <div class="heading__lead">
        <?php
        global $more; $more = 0;
        the_excerpt();
        ?>
      </div>
      </header>
      <div class="twocolumnblock">
        <?php $more=1; the_content('', TRUE); ?>
        <h4>Csak lazán</h4>
        <p>Legyél türelmes és őszinte magadhoz. A testednek szüksége van pár alkalomra, amíg megszokja ezt az új környezetet. Nyugodtan ülj le és pihenj egy picit óra alatt, ha úgy érzed szükséges.</p>
      </div>
      <br><br>
      <a href="<?php the_permalink(206); ?>" class="button large">Válassz óránk közül!</a>
    </div>
  </div>
</div>
<!-- <div class="ps ps--opaque">
  <div class="row">
    <div class="columns">
      <div class="content">
        <h2>Egy menet az Astorián így néz ki</h2>
        <ul>
          <li>Érkezés, sorrend. regisztráció, recepció<br><small>A pihenő részben meleg teával várunk, hogy ráhangolódhass az órára</small></li>
          <li>Vásárolhatsz és bérelhetsz dolgokat <br><small>Vehetsz vizet. Recepciónkon zuhanyzáshoz és jógázáshoz való professzionális törölközőt, matracot és kiegészítőket is vásárolhatsz vagy bérelhetsz. Hot jógához kifejlesztett <a target="_blank" href="http://dogdayswera.com">DogDays Yoga Wear</a> ruhákat is vásárolhatsz.</small></li>
          <li>Öltöző, zuhanyzó stb <br><small>Tágas öltözőinkben zuhanyzásra is van lehetőséged, melyhez a tusfürdőt és a sampont biztosítjuk számodra.</small></li>
          <li>Hányan vannak egy teremben, hogy férek el, helyfogalalás ...</li>
          <li>Ha vége mi történik <br><small>Gyakorlás után pedig friss almát kínálunk, ahol megoszthatod élményeidet oktatóddal és a többi jógázóval.</small></li>
        </ul>
      </div>
    </div>
  </div>
</div> -->
<div class="ps ps--opaque">
  <div class="row">
    <div class="columns tablet-8 tablet-centered xxlarge-6 xxlarge-uncentered">
      <div class="content">
        <h2>Jóga etikett</h2>
        <ul>
          <li><strong>Kérjük érkezz időben!</strong> A későket, a többi jógázó és az oktatóra való tekintettel, sajnos nem áll módunkban beengedni.</li>
          <li><strong>Mobiltelefonodat hagyd az öltöző szekrényben</strong> lehalkítva, hogy senkit se zavarjon. A terembe bevinni szigorúan tilos! Ha mégis elfeledkeztél róla, oktatód kiviszi a recepcióra, ahol biztonságban lesz az óra alatt.</li>
          <li><strong>Kerüld az erős illatokat.</strong> Mellőzd a mentolos bemelegítő krémek használatát. Ha úgy érzed szükséges, nyugodtan zuhanyozz le óra előtt.</li>
          <li>Kérjük, a teremben lévő <strong>fűtőtestekhez ne nyúlj</strong> hozzá és ne kapcsold ki őket. Bízz az oktatódban, hogy tudja, milyen hőmérséklet szükséges ahhoz, hogy biztonságosan kihozd a maximumot a gyakorlásodból. Ha valamelyik fűtőtest mégis zavarna, jelezd oktatódnak és megoldja a helyzetet.</li>
          <li>Próbálj meg <strong>végig bent maradni</strong> a teremben. Ha mégis ki kellene menned a mosdóba, azt a gyakorlatok közti rövid szünetben tedd.</li>
          <li>Ha beteg vagy, <strong>adj időt magadnak a teljes gyógyulásra</strong> és csak utána térj vissza gyakorolni.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>