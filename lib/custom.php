  <?php
    // Define path and URL to the ACF plugin.
    define( 'BIKRAM_ACF_PATH', get_stylesheet_directory() . '/lib/acf/' );
    define( 'BIKRAM_ACF_URL', get_stylesheet_directory_uri() . '/lib/acf/' );

    // Include the ACF plugin.
    include_once( BIKRAM_ACF_PATH . 'acf.php' );

    // Customize the url setting to fix incorrect asset URLs.
    add_filter('acf/settings/url', 'bikram_acf_settings_url');
    function bikram_acf_settings_url( $url ) {
        return BIKRAM_ACF_URL;
    }

    // (Optional) Hide the ACF admin menu item.
    // add_filter('acf/settings/show_admin', 'bikram_acf_settings_show_admin');
    // function bikram_acf_settings_show_admin( $show_admin ) {
    //     return false;
    // }

    // 5. Unhide native metabox
    // add_filter('acf/settings/remove_wp_meta_box', '__return_false');

    // 6. Save JSON
    add_filter('acf/settings/save_json', 'bikram_acf_json_save_point');
    function bikram_acf_json_save_point( $path ) {
        $path = get_stylesheet_directory() . '/lib/jsonacf';
        return $path;
    }


    // 7. Load JSON
    add_filter('acf/settings/load_json', 'bikram_acf_json_load_point');
    function bikram_acf_json_load_point( $paths ) {
        unset($paths[0]);
        $paths[] = get_stylesheet_directory() . '/lib/jsonacf';
        return $paths;
    }

  // 8 Generated fields include
//   include_once( get_stylesheet_directory() . '/lib/acffields.php' );

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
