<?php use Roots\Sage\Titles; ?>
<header class="bloghead ps ps--narrow">
  <div class="row">
    <div class="columns large-6">
      <h1 class="bloghead__title">
        <a href="<?php the_permalink(get_option( 'page_for_posts' )); ?>">
          <?= get_the_title(get_option( 'page_for_posts' )); ?></a><?= is_archive()?'<small>'.Titles\title().'</small>':''; ?>
      </h1>
    </div>
    <div class="columns large-text-right large-6">
      <ul class="bloghead__catlist">
        <li class="cat-item cat-item-all">
          <a href="<?php the_permalink(get_option( 'page_for_posts' )); ?>"><?php _e('All','bikram') ?></a>
        </li>
        <?php wp_list_categories( array(
          'style' => 'list',
          'title_li' => ''
        )); ?>
      </ul>
    </div>
  </div>
</header>