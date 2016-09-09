<?php if ( get_field('hasdate')==0 ) : ?>
<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
<?php endif; ?>