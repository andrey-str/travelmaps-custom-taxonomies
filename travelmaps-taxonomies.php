<?php
/*
Plugin Name: Travel Maps Custom Taxonomies
Plugin URI: http://github.com/andrey-str/travelmaps-custom-taxonomies
Author: Andrey Streltsov
Version: 1.0
Author URI: http:// anse.me
*/

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_places_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_places_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'place', 'taxonomy general name' ),
    'singular_name' => _x( 'Place', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Places' ),
    'all_items' => __( 'All Places' ),
    'parent_item' => __( 'Parent Place' ),
    'parent_item_colon' => __( 'Parent Place:' ),
    'edit_item' => __( 'Edit Place' ), 
    'update_item' => __( 'Update Place' ),
    'add_new_item' => __( 'Add New Place' ),
    'new_item_name' => __( 'New Place Name' ),
    'menu_name' => __( 'Places' ),
  ); 	

// Now register the taxonomy

  register_taxonomy('place',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'place' ),
  ));

}

