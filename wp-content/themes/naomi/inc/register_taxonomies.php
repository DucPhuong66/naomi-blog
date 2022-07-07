<?php
// Register Custom Taxonomies
function region_custom_taxonomies() {

	$labels = array(
		'name'                       => _x( 'Portfolio Categories', 'Taxonomy General Name', 'italianatelier' ),
		'singular_name'              => _x( 'Portfolio Category', 'Taxonomy Singular Name', 'italianatelier' ),
		'menu_name'                  => __( 'Portfolio Categories', 'italianatelier' ),
		'all_items'                  => __( 'All Portfolio Categories', 'italianatelier' ),
		'parent_item'                => __( 'Parent Portfolio Category', 'italianatelier' ),
		'parent_item_colon'          => __( 'Parent Portfolio Category:', 'italianatelier' ),
		'new_item_name'              => __( 'New Portfolio Category Name', 'italianatelier' ),
		'add_new_item'               => __( 'Add New Portfolio Category', 'italianatelier' ),
		'edit_item'                  => __( 'Edit Portfolio Category', 'italianatelier' ),
		'update_item'                => __( 'Update Portfolio Category', 'italianatelier' ),
		'view_item'                  => __( 'View Item', 'italianatelier' ),
		'separate_items_with_commas' => __( 'Separate portfolio categories with commas', 'italianatelier' ),
		'add_or_remove_items'        => __( 'Add or remove portfolio categories', 'italianatelier' ),
		'choose_from_most_used'      => __( 'Choose from the most used portfolio categories', 'italianatelier' ),
		'popular_items'              => __( 'Popular portfolio categories', 'italianatelier' ),
		'search_items'               => __( 'Search portfolio categories', 'italianatelier' ),
		'not_found'                  => __( 'Not Found', 'italianatelier' ),
		'no_terms'                   => __( 'No portfolio categories', 'italianatelier' ),
		'items_list'                 => __( 'Portfolio categories list', 'italianatelier' ),
		'items_list_navigation'      => __( 'Portfolio categories list navigation', 'italianatelier' ),
	);
	$args = array(
		'labels'                     => $labels,
		'slug'						 => 'portfolio_category',
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true, 	
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );

	$labels = array(
		'name'                       => _x( 'Store Categories', 'Taxonomy General Name', 'italianatelier' ),
		'singular_name'              => _x( 'Store Category', 'Taxonomy Singular Name', 'italianatelier' ),
		'menu_name'                  => __( 'Store Categories', 'italianatelier' ),
		'all_items'                  => __( 'All Store Categories', 'italianatelier' ),
		'parent_item'                => __( 'Parent Store Category', 'italianatelier' ),
		'parent_item_colon'          => __( 'Parent Store Category:', 'italianatelier' ),
		'new_item_name'              => __( 'New Store Category Name', 'italianatelier' ),
		'add_new_item'               => __( 'Add New Store Category', 'italianatelier' ),
		'edit_item'                  => __( 'Edit Store Category', 'italianatelier' ),
		'update_item'                => __( 'Update Store Category', 'italianatelier' ),
		'view_item'                  => __( 'View Item', 'italianatelier' ),
		'separate_items_with_commas' => __( 'Separate Store categories with commas', 'italianatelier' ),
		'add_or_remove_items'        => __( 'Add or remove Store categories', 'italianatelier' ),
		'choose_from_most_used'      => __( 'Choose from the most used Store categories', 'italianatelier' ),
		'popular_items'              => __( 'Popular Store categories', 'italianatelier' ),
		'search_items'               => __( 'Search Store categories', 'italianatelier' ),
		'not_found'                  => __( 'Not Found', 'italianatelier' ),
		'no_terms'                   => __( 'No Store categories', 'italianatelier' ),
		'items_list'                 => __( 'Store categories list', 'italianatelier' ),
		'items_list_navigation'      => __( 'Store categories list navigation', 'italianatelier' ),
	);
	$args = array(
		'labels'                     => $labels,
		'slug'						 => 'store_category',
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true, 	
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'store_category', array( 'store' ), $args );

	$labels = array(
		'name'                       => _x( 'City Categories', 'Taxonomy General Name', 'italianatelier' ),
		'singular_name'              => _x( 'City Category', 'Taxonomy Singular Name', 'italianatelier' ),
		'menu_name'                  => __( 'City', 'italianatelier' ),
		'all_items'                  => __( 'All City Categories', 'italianatelier' ),
		'parent_item'                => __( 'Parent City Category', 'italianatelier' ),
		'parent_item_colon'          => __( 'Parent City Category:', 'italianatelier' ),
		'new_item_name'              => __( 'New City Category Name', 'italianatelier' ),
		'add_new_item'               => __( 'Add New City Category', 'italianatelier' ),
		'edit_item'                  => __( 'Edit City Category', 'italianatelier' ),
		'update_item'                => __( 'Update City Category', 'italianatelier' ),
		'view_item'                  => __( 'View Item', 'italianatelier' ),
		'separate_items_with_commas' => __( 'Separate City categories with commas', 'italianatelier' ),
		'add_or_remove_items'        => __( 'Add or remove City categories', 'italianatelier' ),
		'choose_from_most_used'      => __( 'Choose from the most used Store categories', 'italianatelier' ),
		'popular_items'              => __( 'Popular City categories', 'italianatelier' ),
		'search_items'               => __( 'Search City categories', 'italianatelier' ),
		'not_found'                  => __( 'Not Found', 'italianatelier' ),
		'no_terms'                   => __( 'No City categories', 'italianatelier' ),
		'items_list'                 => __( 'City categories list', 'italianatelier' ),
		'items_list_navigation'      => __( 'City categories list navigation', 'italianatelier' ),
	);
	$args = array(
		'labels'                     => $labels,
		'slug'						 => 'city',
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true, 	
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'city', array( 'store' ), $args );

}
add_action( 'init', 'region_custom_taxonomies', 0 );





