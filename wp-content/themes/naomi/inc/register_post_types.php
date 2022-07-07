<?php
// Register Custom Post Type
function register_custom_post_types() {

	$labels = array(
		'name'                  => _x( 'Brands', 'Post Type General Name', 'italianatelier' ),
		'singular_name'         => _x( 'Brand', 'Post Type Singular Name', 'italianatelier' ),
		'menu_name'             => __( 'Brands', 'italianatelier' ),
		'name_admin_bar'        => __( 'Brand', 'italianatelier' ),
		'archives'              => __( 'Brand Archives', 'italianatelier' ),
		'attributes'            => __( 'Brand Attributes', 'italianatelier' ),
		'parent_item_colon'     => __( 'Parent Brand:', 'italianatelier' ),
		'all_items'             => __( 'All Brands', 'italianatelier' ),
		'add_new_item'          => __( 'Add New Brand', 'italianatelier' ),
		'add_new'               => __( 'Add New', 'italianatelier' ),
		'new_item'              => __( 'New Brand', 'italianatelier' ),
		'edit_item'             => __( 'Edit Brand', 'italianatelier' ),
		'update_item'           => __( 'Update Brand', 'italianatelier' ),
		'view_item'             => __( 'View Brand', 'italianatelier' ),
		'view_items'            => __( 'View Brands', 'italianatelier' ),
		'search_items'          => __( 'Search Brand', 'italianatelier' ),
		'not_found'             => __( 'Not found', 'italianatelier' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'italianatelier' ),
		'featured_image'        => __( 'Featured Image', 'italianatelier' ),
		'set_featured_image'    => __( 'Set featured image', 'italianatelier' ),
		'remove_featured_image' => __( 'Remove featured image', 'italianatelier' ),
		'use_featured_image'    => __( 'Use as featured image', 'italianatelier' ),
		'insert_into_item'      => __( 'Insert into brand', 'italianatelier' ),
		'uploaded_to_this_item' => __( 'Uploaded to this brand', 'italianatelier' ),
		'items_list'            => __( 'Brands list', 'italianatelier' ),
		'items_list_navigation' => __( 'Brands list navigation', 'italianatelier' ),
		'filter_items_list'     => __( 'Filter Brands list', 'italianatelier' ),
	);
	$args = array(
		'label'                 => __( 'Brand', 'italianatelier' ),
		'description'           => __( 'Brand Description', 'italianatelier' ),
		'labels'                => $labels,
		'supports'              => array('title','editor','thumbnail'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'brand', $args );

}
add_action( 'init', 'register_custom_post_types', 0 );