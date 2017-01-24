<?php
  // 1. customize ACF path
  add_filter('acf/settings/path', 'bikram_acf_settings_path');
   function bikram_acf_settings_path( $path ) {
      $path = get_stylesheet_directory() . '/lib/acf/';
      return $path;
  }
  // 2. customize ACF dir
  add_filter('acf/settings/dir', 'bikram_acf_settings_dir');
  function bikram_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/lib/acf/';
    return $dir;
  }

  // 3. Hide ACF field group menu item
  //add_filter('acf/settings/show_admin', '__return_false');

  // 4. Include ACF
  include_once( get_stylesheet_directory() . '/lib/acf/acf.php' );



  add_filter('body_class','bikram_body_class_slugs');
  function bikram_body_class_slugs($classes) {
      global $wp_query, $wpdb;

      if ( /*is_archive() ||*/ is_search() /*|| is_home()*/ || is_singular('aapost') || is_singular('aateacher') || is_page_template('tmpl-prices.php') || is_page_template('tmpl-contact.php') ) {
          $classes[] = 'no-hero';
      }
      if ( is_archive() || is_home() || is_singular('post') || is_page_template('tmpl-schedule.php')) {
          $classes[] = 'light-hero';
      }

      return $classes;

  }