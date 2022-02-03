<?php

// Custom nav Menu-------------------------------------------------------------
function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'menu-1' => __( 'Primary', 'twentynineteen' ),
            'footer' => __( 'Footer Menu', 'twentynineteen' ),
            'social' => __( 'Social Links Menu', 'twentynineteen' ),
        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' ); 

// Custome Post Type--------------------------------------------------------------
// function my_custom_post_product() {
//     $args = array();
//     register_post_type( 'product', $args ); 
//   }
//   add_action( 'init', 'my_custom_post_product' );
 // -----------------------------------------------------------------------------------
  function my_custom_post_product() {
    $labels = array(
      'name'               => _x( 'Products', 'post type general name' ),
      'singular_name'      => _x( 'Product', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'book' ),
      'add_new_item'       => __( 'Add New Product' ),
      'edit_item'          => __( 'Edit Product' ),
      'new_item'           => __( 'New Product' ),
      'all_items'          => __( 'All Products' ),
      'view_item'          => __( 'View Product' ),
      'search_items'       => __( 'Search Products' ),
      'not_found'          => __( 'No products found' ),
      'not_found_in_trash' => __( 'No products found in the Trash' ),
      'menu_name'          => 'Products'
    );
    $args = array(
      'labels'        => $labels,
      'description'   => 'Holds our products and product specific data',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
    );
    register_post_type( 'product', $args ); 
  }
  add_action( 'init', 'my_custom_post_product' );


  // Our custom post type function
function create_posttype() {
 
  register_post_type( 'movies',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Movies' ),
              'singular_name' => __( 'Movie' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'movies'),
          'show_in_rest' => true,

      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Movies', 'Post Type General Name', 'twentytwenty' ),
          'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentytwenty' ),
          'menu_name'           => __( 'Movies', 'twentytwenty' ),
          'parent_item_colon'   => __( 'Parent Movie', 'twentytwenty' ),
          'all_items'           => __( 'All Movies', 'twentytwenty' ),
          'view_item'           => __( 'View Movie', 'twentytwenty' ),
          'add_new_item'        => __( 'Add New Movie', 'twentytwenty' ),
          'add_new'             => __( 'Add New', 'twentytwenty' ),
          'edit_item'           => __( 'Edit Movie', 'twentytwenty' ),
          'update_item'         => __( 'Update Movie', 'twentytwenty' ),
          'search_items'        => __( 'Search Movie', 'twentytwenty' ),
          'not_found'           => __( 'Not Found', 'twentytwenty' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
      );
       
  // Set other options for Custom Post Type
       
      $args = array(
          'label'               => __( 'movies', 'twentytwenty' ),
          'description'         => __( 'Movie news and reviews', 'twentytwenty' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy. 
          'taxonomies'          => array( 'genres' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */ 
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
          'show_in_rest' => true,
   
      );
       
      // Registering your Custom Post Type
      register_post_type( 'movies', $args );
   
  }
   
  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */
   
  add_action( 'init', 'custom_post_type', 0 );
 

function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'movies' ) );
    return $query;
}
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );


function ourWidgetsInit() {
  register_sidebar(
      array(
        'name' => 'sidebar',
        'id'   => 'sidebar1'
      )
  );
}
add_action( 'widgets_init', 'ourWidgetsInit' ); 
add_theme_support( 'post-thumbnails' );


// function modify_read_more_link() {
//   return '<a class="more-link" href="' . get_permalink() . '">Continue Reading</a>';
//  }
//  add_filter( 'the_content_more_link', 'modify_read_more_link' );

// Post View --------------------------------------------------------------------
function gt_get_post_view() {
  $count = get_post_meta( get_the_ID(), 'post_views_count', true );
  return "$count views";
}
function gt_set_post_view() {
  $key = 'post_views_count';
  $post_id = get_the_ID();
  $count = (int) get_post_meta( $post_id, $key, true );
  $count++;
  update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
  $columns['post_views'] = 'Views';
  return $columns;
}
function gt_posts_custom_column_views( $column ) {
  if ( $column === 'post_views') {
      echo gt_get_post_view();
  }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );
?>

