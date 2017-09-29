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

  add_post_type_support( 'page', 'excerpt' );

  add_filter('body_class','bikram_body_class_slugs');
  function bikram_body_class_slugs($classes) {
      global $wp_query, $wpdb;

      if ( is_search() || is_home() || is_archive() || is_singular('post') || is_page_template('tmpl-classes.php') || is_page_template('tmpl-contact.php') || is_page_template('atmpl-schedule.php') ) {
          $classes[] = 'no-hero';
      }
      if ( is_archive() || is_singular('post') || is_page_template('atmpl-schedule.php') ) {
          $classes[] = 'light-hero';
      }

      return $classes;

  }

  function the_gcaladdlink($event) {
    //mintaurl:https://www.google.com/calendar/event?action=TEMPLATE&text=Szecesszi%C3%B3+%C3%A9s+divat+2017.11.25.+10%3A00+Czingel+Sz.&dates=20171125T100000/20171125T120000&details&location&trp=false&sprop=website:https://setamuhely.hu&ctz=Atlantic%2FAzores
    $class=get_field('class',$event);
    $teacher=get_field('teacher', $event);
    $gcalbase='https://www.google.com/calendar/event?action=TEMPLATE';
    $gcalparameters='&text='.urlencode(get_the_title($class));
    $gcalparameters.='&dates='.date('Ymd\THis', strtotime( get_field('starts',$event) ) ).'/'.date('Ymd\THis', strtotime( get_field('starts',$event).' '.get_field('tract',$event).' minutes' ) ) ;
    $gcalparameters.='&details='.urlencode('Tanár: '.get_the_title($teacher));
    $gcalparameters.='&location='.urlencode('Bikram Jóga Központ - H-1075 Budapest, Károly krt. 1.');
    $gcalparameters.='&trp=false&ctz='.urlencode('Europe/Budapest');
    return $gcalbase.$gcalparameters;
  }