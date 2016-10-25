<?php if ( get_field('hasdate')==0 ) : ?>
  <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
<?php else: ?>

  <div class="eventdate" itemscope itemtype="http://schema.org/Event">
    <meta itemprop="startDate" content="<?= date_i18n( 'c', strtotime(get_field('startdate'))  ); ?>">
    <meta itemprop="endDate" content="<?= date_i18n( 'c', strtotime(get_field('enddate'))  ); ?>">
    <?php if ( get_field('multiday')==0 ) : ?>
      <!-- Egynapos esemény -->
      <time class="evtime evtime--oneday" datetime="<?= date_i18n( 'c', strtotime(get_field('startdate'))  ); ?>">
        <?= date_i18n( 'Y. F. d.  l', strtotime(get_field('startdate'))  ); ?>
        <span><?= date_i18n( 'H:i', strtotime(get_field('startdate'))  ); ?> - <?= date_i18n( 'H:i', strtotime(get_field('enddate'))  ); ?> </span>
      </time>

    <?php else: ?>
      <!-- Többnapos esemény -->

      <time class="evstarted" datetime="<?= date_i18n( 'c', strtotime(get_field('startdate'))  ); ?>"><?= date_i18n( 'Y. F. d.', strtotime(get_field('startdate'))  ); ?></time>
      <time class="evended" datetime="<?= date_i18n( 'c', strtotime(get_field('enddate'))  ); ?>""><?= date_i18n( 'Y. F. d.', strtotime(get_field('enddate'))  ); ?></time>
    <?php endif; ?>
  </div>
<?php endif; ?>