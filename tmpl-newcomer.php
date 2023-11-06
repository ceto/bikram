<?php
/**
* Template Name: New Comer Template with FAQ
*/
?>
<?php while (have_posts()) : the_post(); ?>
<section class="hero">
    <figure class="hero__bg">

            <?php $headerimage = get_field('bgimage'); ?>
            <?= wp_get_attachment_image($headerimage['id'],'full'); ?>
    </figure>
    <div class="hero__content row" data-magellan data-bar-offset="0">
        <div class="columns tablet-8 large-6">
            <?php if (have_rows('maintext')): ?>
                <ul class="facts facts--bright">
                  <?php while ( have_rows('maintext') ) : the_row(); ?>
                    <li><?php the_sub_field('mintext_row') ?></li>
                  <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <?php if ( get_field('lead') ) : ?>
                <div class="hero__lead"><?php the_field('lead') ?></div>
            <?php endif; ?>
            <?php if ( get_field('buttontext') ) : ?>
                <a href="<?= get_the_permalink( get_field('buttontarget') ); ?>" class="hero__action"><?php the_field('buttontext') ?></a>
            <?php endif; ?>
        </div>
        <div class="columns tablet-4 large-6 xxlarge-4 xxlarge-offset-2">
            <div id="formsection" class="newpagehead__aside__panel" data-magellan-target="formsection">
                <?php get_template_part('templates/ncform'); ?>
            </div>
        </div>
    </div>
</section>
<div class="ps">
  <div class="row">
    <div class="columns tablet-8 tablet-centered xxlarge-uncentered content">
      <header class="heading">
        <h2 class="heading__title"><?php the_title(); ?></h2>
        <hr>
      <div class="heading__lead">
        <?php the_excerpt(); ?>
        <br>
      </div>
      </header>
       <?php the_content(); ?>
    </div>
  </div>
</div>
<?php get_template_part('templates/widegallery'); ?>
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
