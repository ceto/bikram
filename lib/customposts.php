<?php

// Register Class Post Type
function bikram_custom_post_types() {

  // Teachers
  $labels = array(
    'name'                  => _x( 'Events', 'Event General Name', 'bikram' ),
    'singular_name'         => _x( 'Event', 'Event Singular Name', 'bikram' ),
    'menu_name'             => __( 'Timetable', 'bikram' ),
    'name_admin_bar'        => __( 'Event', 'bikram' ),
    'archives'              => __( 'Event Archives', 'bikram' ),
    'parent_item_colon'     => __( 'Parent Event:', 'bikram' ),
    'all_items'             => __( 'Events', 'bikram' ),
    'add_new_item'          => __( 'Add New Event', 'bikram' ),
    'add_new'               => __( 'Add New', 'bikram' ),
    'new_item'              => __( 'New Event', 'bikram' ),
    'edit_item'             => __( 'Edit Event', 'bikram' ),
    'update_item'           => __( 'Update Event', 'bikram' ),
    'view_item'             => __( 'View Event', 'bikram' ),
    'search_items'          => __( 'Search Event', 'bikram' ),
    'not_found'             => __( 'Not found', 'bikram' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'bikram' ),
    'featured_image'        => __( 'Event Photo', 'bikram' ),
    'set_featured_image'    => __( 'Set Event photo', 'bikram' ),
    'remove_featured_image' => __( 'Remove Event photo', 'bikram' ),
    'use_featured_image'    => __( 'Use as Event photo', 'bikram' ),
    'insert_into_item'      => __( 'Insert into Event', 'bikram' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Event', 'bikram' ),
    'items_list'            => __( 'Events list', 'bikram' ),
    'items_list_navigation' => __( 'Events list navigation', 'bikram' ),
    'filter_items_list'     => __( 'Filter Events list', 'bikram' ),
  );
  $args = array(
    'label'                 => __( 'Event', 'bikram' ),
    'description'           => __( 'Event Description', 'bikram' ),
    'labels'                => $labels,
    'supports'              => array(''),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-calendar-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'rewrite'               => array('feeds' => true),
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
  );
  register_post_type( 'event', $args );


  // Teachers
  $labels = array(
    'name'                  => _x( 'Teachers', 'Teacher General Name', 'bikram' ),
    'singular_name'         => _x( 'Teacher', 'Teacher Singular Name', 'bikram' ),
    'menu_name'             => __( 'Teachers', 'bikram' ),
    'name_admin_bar'        => __( 'Teacher', 'bikram' ),
    'archives'              => __( 'Teacher Archives', 'bikram' ),
    'parent_item_colon'     => __( 'Parent Teacher:', 'bikram' ),
    'all_items'             => __( 'Teachers', 'bikram' ),
    'add_new_item'          => __( 'Add New Teacher', 'bikram' ),
    'add_new'               => __( 'Add New', 'bikram' ),
    'new_item'              => __( 'New Teacher', 'bikram' ),
    'edit_item'             => __( 'Edit Teacher', 'bikram' ),
    'update_item'           => __( 'Update Teacher', 'bikram' ),
    'view_item'             => __( 'View Teacher', 'bikram' ),
    'search_items'          => __( 'Search Teacher', 'bikram' ),
    'not_found'             => __( 'Not found', 'bikram' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'bikram' ),
    'featured_image'        => __( 'Teacher Photo', 'bikram' ),
    'set_featured_image'    => __( 'Set Teacher photo', 'bikram' ),
    'remove_featured_image' => __( 'Remove Teacher photo', 'bikram' ),
    'use_featured_image'    => __( 'Use as Teacher photo', 'bikram' ),
    'insert_into_item'      => __( 'Insert into Teacher', 'bikram' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Teacher', 'bikram' ),
    'items_list'            => __( 'Teachers list', 'bikram' ),
    'items_list_navigation' => __( 'Teachers list navigation', 'bikram' ),
    'filter_items_list'     => __( 'Filter Teachers list', 'bikram' ),
  );
  $args = array(
    'label'                 => __( 'Teacher', 'bikram' ),
    'description'           => __( 'Teacher Description', 'bikram' ),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => 'edit.php?post_type=event',
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-id',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'teacher', $args );

  //Classes
  $labels = array(
    'name'                  => _x( 'Class', 'Class General Name', 'bikram' ),
    'singular_name'         => _x( 'Class', 'Class Singular Name', 'bikram' ),
    'menu_name'             => __( 'Classes', 'bikram' ),
    'name_admin_bar'        => __( 'Class', 'bikram' ),
    'archives'              => __( 'Class Archives', 'bikram' ),
    'parent_item_colon'     => __( 'Parent Class:', 'bikram' ),
    'all_items'             => __( 'Classes', 'bikram' ),
    'add_new_item'          => __( 'Add New Class', 'bikram' ),
    'add_new'               => __( 'Add New', 'bikram' ),
    'new_item'              => __( 'New Class', 'bikram' ),
    'edit_item'             => __( 'Edit Class', 'bikram' ),
    'update_item'           => __( 'Update Class', 'bikram' ),
    'view_item'             => __( 'View Class', 'bikram' ),
    'search_items'          => __( 'Search Class', 'bikram' ),
    'not_found'             => __( 'Not found', 'bikram' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'bikram' ),
    'featured_image'        => __( 'Class Photo', 'bikram' ),
    'set_featured_image'    => __( 'Set Class photo', 'bikram' ),
    'remove_featured_image' => __( 'Remove Class photo', 'bikram' ),
    'use_featured_image'    => __( 'Use as Class photo', 'bikram' ),
    'insert_into_item'      => __( 'Insert into Class', 'bikram' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Class', 'bikram' ),
    'items_list'            => __( 'Classes list', 'bikram' ),
    'items_list_navigation' => __( 'Classes list navigation', 'bikram' ),
    'filter_items_list'     => __( 'Filter classes list', 'bikram' ),
  );
  $args = array(
    'label'                 => __( 'Classes', 'bikram' ),
    'description'           => __( 'Class Description', 'bikram' ),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => 'edit.php?post_type=event',
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-universal-access-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );

  register_post_type( 'class', $args );

    $labels = array(
        'name'                  => _x( 'Leads', 'Post Type General Name', 'bikram' ),
        'singular_name'         => _x( 'Lead', 'Post Type Singular Name', 'bikram' ),
        'menu_name'             => __( 'Leads', 'bikram' ),
        'name_admin_bar'        => __( 'Lead', 'bikram' ),
        'archives'              => __( 'Item Archives', 'bikram' ),
        'attributes'            => __( 'Item Attributes', 'bikram' ),
        'parent_item_colon'     => __( 'Parent Item:', 'bikram' ),
        'all_items'             => __( 'Összes Lead', 'bikram' ),
        'add_new_item'          => __( 'Új hozzáadása', 'bikram' ),
        'add_new'               => __( 'Új hozzáadása', 'bikram' ),
        'new_item'              => __( 'New Item', 'bikram' ),
        'edit_item'             => __( 'Edit Item', 'bikram' ),
        'update_item'           => __( 'Update Item', 'bikram' ),
        'view_item'             => __( 'View Item', 'bikram' ),
        'view_items'            => __( 'View Items', 'bikram' ),
        'search_items'          => __( 'Search Item', 'bikram' ),
        'not_found'             => __( 'Not found', 'bikram' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'bikram' ),
        'featured_image'        => __( 'Featured Image', 'bikram' ),
        'set_featured_image'    => __( 'Set featured image', 'bikram' ),
        'remove_featured_image' => __( 'Remove featured image', 'bikram' ),
        'use_featured_image'    => __( 'Use as featured image', 'bikram' ),
        'insert_into_item'      => __( 'Insert into item', 'bikram' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'bikram' ),
        'items_list'            => __( 'Items list', 'bikram' ),
        'items_list_navigation' => __( 'Items list navigation', 'bikram' ),
        'filter_items_list'     => __( 'Filter items list', 'bikram' ),
    );
    $args = array(
        'label'                 => __( 'Lead', 'bikram' ),
        'description'           => __( 'Custom post type for Lead', 'bikram' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'custom-fields'),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-beer',
        'menu_position'         => 2,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'page',
        'rewrite'               => array('slug' => 'leads')
    );
    register_post_type( 'lead', $args );

}
add_action( 'init', 'bikram_custom_post_types', 0 );


add_filter('manage_event_posts_columns', 'bikram_event_table_head');
function bikram_event_table_head( $defaults ) {
    unset($defaults['date']);
    $defaults['event_date']  = 'Event Date';
    $defaults['event_teacher'] = 'Teacher';
    return $defaults;
}


add_action( 'manage_event_posts_custom_column', 'bikram_event_table_content', 10, 2 );

function bikram_event_table_content( $column_name, $post_id ) {
    if ($column_name == 'event_date') {
      echo date_i18n('l H:i', strtotime( get_field('starts') ) ) .' (' . date_i18n('m/d', strtotime( get_field('starts') ) ).')' ;
    }

    if ($column_name == 'event_teacher') {
      $teacher_object = get_field('teacher');
      echo get_the_title( $teacher_object->ID);
    }
}

// Event list is always ascending by date and starts
function bikram_event_order( $query ) {
    if ( /*( ! is_admin() ) &&*/ ($query->query['post_type']=='event') ) {

        $query->set( 'order', 'ASC');
        $query->set( 'orderby', 'meta_value' );
        $query->set( 'meta_key', 'starts');
        $query->set( 'meta_type', 'DATETIME');
        if ($query->is_main_query() && ( ! is_admin() ) ) {
            $query->set( 'meta_query', array( 'relation'=>'AND', array('key' => 'starts', 'compare' => '>=', 'value'=> date('Y-m-d H:i:s'), type => 'DATETIME' ) ) );
            $query->set('posts_per_page', '-1');
        }
    }
}
add_action( 'pre_get_posts', 'bikram_event_order' );

// set event title
function bikram_set_event_title ($post_id) {
    if ( $post_id == null || empty($_POST) )
        return;

    if ( !isset( $_POST['post_type'] ) || $_POST['post_type']!='event' )
        return;

    if ( wp_is_post_revision( $post_id ) )
        $post_id = wp_is_post_revision( $post_id );

    global $post;
    if ( empty( $post ) )
        $post = get_post($post_id);

    global $wpdb;

    $teacher=get_field('teacher');

    $title = mb_strtoupper(date_i18n('m.d. l H:i', strtotime( get_field('starts') ) ), 'UTF-8') . ' | ' . get_the_title( get_field('class') ) . ' - ' .  get_field('nick_name', $teacher->ID) ;
    $where = array( 'ID' => $post_id );
    $wpdb->update( $wpdb->posts, array( 'post_title' => $title ), $where );
}
add_action('acf/save_post', 'bikram_set_event_title', 20 );


//remove sticky posts
function bikram_remove_sticky_posts( $query ) {
    if ( is_home() && $query->is_main_query() ) {
        //$query->set( 'ignore_sticky_posts', true );
        $query->set( 'post__not_in' , get_option( 'sticky_posts' ));
    }
    return $query;
}
add_filter( 'pre_get_posts', 'bikram_remove_sticky_posts' );
