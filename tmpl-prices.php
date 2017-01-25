<?php
/**
* Template Name: Prices Template with Pricelist
*/
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="theprices">
  <div class="row">
    <div class="columns large-6">
      <table class="pricetable">
        <thead>
          <tr>
            <th>Árak</th>
            <th>Felnőtt ár</th>
            <th>Diák/Nyugdíjas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>10 napos próbabérlet<br><small>Csak első alkalommal igényelhető. Tíz egymást követő napig érvényes.</small></td>
            <td>2 500,-</td>
            <td>2 500,-</td>
          </tr>
          <tr>
            <td>1 alkalom</td>
            <td>2 800,-</td>
            <td>2 000,-</td>
          </tr>
          <tr>
            <td>10 alkalmas bérlet<br>
              <small>3 hónapig érvényes</small>
            </td>
            <td>22 000,-</td>
            <td>15 500,-</td>
          </tr>
          <tr>
            <td><span class="label">Akció</span> Take it easy honey (10 alkalmas)<br>
            <small>Matrac- és 2 db törölköző használattal.</small>
          </td>
          <td>26 000,-</td>
          <td>18 000,-</td>
        </tr>
        <tr>
          <td>Délelőtti 10 alkalmas bérlet<br>
            <small>3 hónapig érvényes</small>
          </td>
          <td>18 000,-</td>
          <td>13 500,-</td>
        </tr>
        <tr>
          <td>20 alkalmas bérlet<br>
          <small>4 hónapig érvényes</small></td>
          <td>41 000,-</td>
          <td>28 000,-</td>
        </tr>
        <tr>
          <td>Havi bérlet</td>
          <td>25 000,-</td>
          <td>17 500,-</td>
        </tr>
        <tr>
          <td>Délelőtti havi bérlet</td>
          <td>20 000,-</td>
          <td>15 000,-</td>
        </tr>
        <tr>
          <td>3 havi bérlet</td>
          <td>67 000,-</td>
          <td>45 000,-</td>
        </tr>
        <tr>
          <td>6 havi bérlet</td>
          <td>130 000,-</td>
          <td>80 000,-</td>
        </tr>
        <tr>
          <td>Éves bérlet</td>
          <td>190 000,-</td>
          <td>125 000,-</td>
        </tr>
        <tr>
          <td>Kombinált havi bérlet<br>
            <small>Astória és Buda stúdióban is érvényes</small>
          </td>
          <td>32 000,-</td>
          <td>22 000,-</td>
        </tr>
        <tr>
          <td>Kombinált éves bérlet<br>
            <small>Astória és Buda stúdióban is érvényes</small>
          </td>
          <td>248 000,-</td>
          <td>162 000,-</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="columns large-6">
    <h2>Kedvezmények, akciók</h2>
      <ul>
        <li>Ha új bérleted az aktuális bérleted lejárta előtt megveszed, 20% árengedményt adunk neked!<br><small>A kedvezmény az összes bérletfajtára vonatkozik.</small></li>
        <li>Hozd el 5 ismerősöd vagy barátod, és a következő bérleted árából 50% árengedményt adunk neked!<br><small>A kedvezmény csak a 10 alkalmas, 20 alkalmas és havi bérletekre vonatkozik.</small></li>
        <li><span class="label">Újdonság</span>Születésnapod van? Ha ezen a napon vásárolsz nálunk bérletet, 50% árengedményt adunk neked!<br><small>A kedvezmény a 10 napos próbabérlet kivételével az összes bérletfajtára vonatkozik.</small></li>
        <li>Ha 6 hónapnál régebben jártál nálunk, kezdd újra 7 napos visszatérő bérlettel!<br><small>A kedvezményes bérlet ára 4 000 Ft.</small></li>
        <li>Hot mama: Kismamáink időkorlátozás nélkül használhatják fel a 10, illetve 20 alkalmas bérleteket.<br><small>Igényelhető: a várandósság 12. hetétől a gyermek 2 éves koráig.</small></li>
      </ul>
      <h2>Tudnivalók</h2>
      <ul>
        <li>A bérletek az órák előtt vásárolhatók meg készpénzel, vagy bankkártyával.</li>
        <li>Egy bérletet csak egy személy használhat!</li>
        <li>A bérleteket nem áll módunkban meghosszabbítani!</li>
        <li>Egy bérlettel a stúdió bármely óráját látogathatod.</li>
      </ul>
      <h2>Kiegésztők bérelhetők, vásárolhatók</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam accusantium, exercitationem ex. Facere deserunt cumque ipsum quibusdam, perspiciatis ab repellendus eligendi quaerat. Assumenda animi sunt asperiores soluta consequuntur esse dicta!</p>
  </div>
</div>
</div>
<?php endwhile; ?>
<section class="photostripe">
    <div class="photostripe__item">
      <img src="http://placehold.it/1200x800/2a2a2a?text=studiofoto 1." alt="">
      <img src="http://placehold.it/1200x800/333/?text=studiofoto 2." alt="">
      <img src="http://placehold.it/1200x800/000/?text=studiofotok" alt="">
      <img src="http://placehold.it/1200x800?text=studiofoto 1." alt="">
    </div>
  </section>