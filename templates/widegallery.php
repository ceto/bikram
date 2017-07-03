<?php
$image_ids = get_field('gallery', false, false);
if( $image_ids ): ?>
<section class="bupapslider">
    <div class="owl-carousel owl-bupapslider">
        <?php foreach( $image_ids as $image_id ): ?>
            <div class="bupapslider__item">
                <?= wp_get_attachment_image( $image_id, 'medium_Large', true, array( 'class' => 'bupapslider__img') ); ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>