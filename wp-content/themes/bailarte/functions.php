<?php

// Menu registration

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}

add_action( 'init', 'register_my_menu' );

// End menu registration

// Thumbnail (Featured Image) support

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   
}

if ( function_exists( 'add_image_size' ) ) { 
  add_image_size( 'wide', 660, 9999 ); //300 pixels wide (and unlimited height)
}

// End thubmanil support


// Custom meta boxes support

function add_generic_metaboxes () {
	$screens = array( 'post', 'page' );
    foreach ($screens as $screen) {
        add_meta_box(
            'featured_in_slideshow',
            'Featured In Home Slideshow',
            'featured_slideshow_checkbox_render',
            $screen
        );
    }
}

function featured_slideshow_checkbox_render ( $post ) {
	// Use nonce for verification
	wp_nonce_field( plugin_basename( __FILE__ ), 'metaboxes_nounce' );

	// The actual fields for data entry
	// Use get_post_meta to retrieve an existing value from the database and use the value for the form
	$value = get_post_meta( $post->ID, '_in_slideshow', true );
	echo '<p>Check this box if you want to show the post/page in the slideshow from the homepage. You must also set a featured image for it in order to show up properly.</p> ';
	$value = (isset($value) && $value != "") ? "checked" : "";
	echo '<label for="featured_in_slideshow">Show in homepage slideshow</label> ';
	echo '<input type="checkbox" id="featured_in_slideshow"'.$value.' name="featured_in_slideshow"/>';
}

add_action( 'add_meta_boxes', 'add_generic_metaboxes' );



/* When the post is saved, saves our custom data */
function myplugin_save_postdata( $post_id ) {

  // First we need to check if the current user is authorised to do this action. 
  if ( 'page' == $_POST['post_type'] ) {
    if ( ! current_user_can( 'edit_page', $post_id ) )
        return;
  } else {
    if ( ! current_user_can( 'edit_post', $post_id ) )
        return;
  }

  // Secondly we need to check if the user intended to change this value.
  if ( ! isset( $_POST['metaboxes_nounce'] ) || ! wp_verify_nonce( $_POST['metaboxes_nounce'], plugin_basename( __FILE__ ) ) )
      return;

  // Thirdly we can save the value to the database

  //if saving in a custom table, get post_ID
  $post_ID = $_POST['post_ID'];
  //sanitize user input
  $mydata = sanitize_text_field( $_POST['featured_in_slideshow'] );

  // Do something with $mydata 
  // either using 
  add_post_meta($post_ID, '_in_slideshow', $mydata, true) or
    update_post_meta($post_ID, '_in_slideshow', $mydata);
  // or a custom table (see Further Reading section below)
}

add_action( 'save_post', 'myplugin_save_postdata' );

// End custom meta boxes 

// register announcement post type

function annoucement_custom_init() {
  $labels = array(
    'name' => 'Announcements',
    'singular_name' => 'Announcement',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Announcement',
    'edit_item' => 'Edit Announcement',
    'new_item' => 'New Announcement',
    'all_items' => 'All Announcements',
    'view_item' => 'View Announcement',
    'search_items' => 'Search Announcements',
    'not_found' =>  'No Announcements found',
    'not_found_in_trash' => 'No Announcements found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Announcements'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'announcement' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 

  register_post_type( 'announcement', $args );
}
add_action( 'init', 'annoucement_custom_init' );
?>