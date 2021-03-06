<?php use Roots\Sage\Titles; ?>
<header class="bloghead">
  <div class="row">
    <div class="columns medium-6">
      <h2 class="bloghead__title">
      <a href="<?php the_permalink(get_option( 'page_for_posts' )); ?>">
      <?= get_the_title(get_option( 'page_for_posts' )); ?></a><?php echo is_archive()?'<small>'.Titles\title().'</small>':''; ?>
      </h2>
    </div>
    <div class="columns medium-text-right medium-6">
      <ul class="bloghead__catlist">
        <li class="cat-item cat-item-all <?= is_home()?'current-cat':'' ?>">
          <a href="<?php the_permalink(get_option( 'page_for_posts' )); ?>"><?= __('Mind','bikram') ?></a>
        </li>
        <?php wp_list_categories( array(
        'style' => 'list',
        'title_li' => ''
        )); ?>
      </ul>
    </div>

  </div>
</header>