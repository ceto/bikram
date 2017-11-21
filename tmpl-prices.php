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
      <?php if( have_rows('pricetable') ): ?>
      <table class="pricetable">
        <thead>
          <tr>
            <th><?= __('Árak','bikram') ?></th>
            <th><?= __('Felnőtt ár','bikram') ?></th>
            <th><?= __('Diák/Nyugdíjas','bikram') ?></th>
          </tr>
        </thead>
        <tbody>
          <?php while ( have_rows('pricetable') ) : the_row(); ?>
          <tr>
            <td><?php the_sub_field('type'); ?><?= get_sub_field('comment')?'<br><small>'.get_sub_field('comment').'</small>':''; ?></td>
            <td><?= number_format(get_sub_field('price_full'),0,'','&nbsp;'); ?>,-</td>
            <td><?= number_format(get_sub_field('price_reduced'),0,'','&nbsp;'); ?>,-</td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
      <?php endif; ?>
      <?php if ( get_field('pricedisclaimer') ) : ?>
      <p class="pricetablediscl"><?php the_field('pricedisclaimer') ?></p>
      <?php endif; ?>
    </div>
    <div class="columns large-6">
      <div class="content prices__content">
        <?php the_content(); ?>
        <div class="prices__cards">
          <img src="<?= get_template_directory_uri().'/dist/images/aycm_card.png'  ?>" alt="AYMC kártya elfogadóhely"> <img src="<?= get_template_directory_uri().'/dist/images/szep_kartya_3.gif'  ?>" alt="SZÉP kártya elfogadóhely">
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php get_template_part('templates/sticky', 'block'); ?>