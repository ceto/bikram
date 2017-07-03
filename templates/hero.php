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
    </div>
</section>