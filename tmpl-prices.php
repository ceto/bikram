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
            <td>7 napos visszatérő bérlet<br><small>Ha már jártál nálunk, de 6 hónapnál régebben.</small></td>
            <td>4 000,-</td>
            <td>4 000,-</td>
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
            <td>Take it easy honey (10 alkalmas)<br>
            <small>Alkalmanként matrac- és 2 db törölköző használattal.</small>
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
      </tbody>
    </table>
  </div>
  <div class="columns large-6">
    <div class="content prices__content">
      <?php the_content(); ?>
    </div>

  </div>
</div>
  <div class="row">
      <div class="columns large-6 large-push-6 prices__cards">
        <img src="<?= get_template_directory_uri().'/dist/images/aycm_card.png'  ?>" alt="AYMC kártya elfogadóhely"> <img src="<?= get_template_directory_uri().'/dist/images/szep_kartya_3.gif'  ?>" alt="SZÉP kártya elfogadóhely">
      </div>
  </div>
</div>
<?php endwhile; ?>


<?php get_template_part('templates/sticky', 'block'); ?>
