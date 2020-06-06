<?php
/**
 * Register post types
 *
 * @package    Reference
 * @subpackage Includes
 *
 * @since      1.0.0
 */

namespace Reference\Includes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register post types
 *
 * @since  1.0.0
 * @access public
 */
class Post_Types {

	/**
	 * Constructor magic method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		// Register doc types.
		add_action( 'init', [ $this, 'register' ] );

	}

	/**
	 * Register doc types.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function register() {

		/**
		 * Post Type: Docs
		 */

		$labels = [
			'name'                  => __( 'Docs', 'reference' ),
			'singular_name'         => __( 'Doc', 'reference' ),
			'menu_name'             => __( 'Docs', 'reference' ),
			'all_items'             => __( 'All Docs', 'reference' ),
			'add_new'               => __( 'Add New', 'reference' ),
			'add_new_item'          => __( 'Add New Doc', 'reference' ),
			'edit_item'             => __( 'Edit Doc', 'reference' ),
			'new_item'              => __( 'New Doc', 'reference' ),
			'view_item'             => __( 'View Doc', 'reference' ),
			'view_items'            => __( 'View Docs', 'reference' ),
			'search_items'          => __( 'Search Docs', 'reference' ),
			'not_found'             => __( 'No Docs Found', 'reference' ),
			'not_found_in_trash'    => __( 'No Docs Found in Trash', 'reference' ),
			'parent_item_colon'     => __( 'Parent Doc', 'reference' ),
			'featured_image'        => __( 'Featured image for this doc', 'reference' ),
			'set_featured_image'    => __( 'Set featured image for this doc', 'reference' ),
			'remove_featured_image' => __( 'Remove featured image for this doc', 'reference' ),
			'use_featured_image'    => __( 'Use as featured image for this doc', 'reference' ),
			'archives'              => __( 'Doc archives', 'reference' ),
			'insert_into_item'      => __( 'Insert into Doc', 'reference' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Doc', 'reference' ),
			'filter_items_list'     => __( 'Filter Docs', 'reference' ),
			'items_list_navigation' => __( 'Docs list navigation', 'reference' ),
			'items_list'            => __( 'Docs List', 'reference' ),
			'attributes'            => __( 'Doc Attributes', 'reference' ),
			'parent_item_colon'     => __( 'Parent Doc', 'reference' ),
		];

		// Apply a filter to labels for customization.
		$labels = apply_filters( 'abref_docs_labels', $labels );

		$options = [
			'label'               => __( 'Docs', 'reference' ),
			'labels'              => $labels,
			'description'         => __( 'Custom post type description.', 'reference' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => 'abref_docs_rest_api',
			'has_archive'         => true,
			'show_in_menu'        => true,
			'exclude_from_search' => false,
			// Sets user role levels, accepts array: 'capabilities'        => [],
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'rewrite'             => [
				'slug'       => 'docs',
				'with_front' => true
			],
			'query_var'           => 'abref_docs',
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-archive',
			'supports'            => [
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'trackbacks',
				'custom-fields',
				'comments',
				'revisions',
				'author',
				'page-attributes',
				'post-formats'
			],
			'taxonomies'          => [
				'category',
				'post_tag',
				'' // Change to your custom taxonomy name.
			],
		];

		// Apply a filter to arguments for customization.
		$options = apply_filters( 'abref_docs_args', $options );

		/**
		 * Register the post type
		 *
		 * Maximum 20 characters, cannot contain capital letters or spaces.
		 */
		register_post_type(
			'docs',
			$options
		);

		/**
		 * Post Type: Guide
		 */

		$labels = [
			'name'                  => __( 'Guides', 'reference' ),
			'singular_name'         => __( 'Guide', 'reference' ),
			'menu_name'             => __( 'Guides', 'reference' ),
			'all_items'             => __( 'All Guides', 'reference' ),
			'add_new'               => __( 'Add New', 'reference' ),
			'add_new_item'          => __( 'Add New Guide', 'reference' ),
			'edit_item'             => __( 'Edit Guide', 'reference' ),
			'new_item'              => __( 'New Guide', 'reference' ),
			'view_item'             => __( 'View Guide', 'reference' ),
			'view_items'            => __( 'View Guides', 'reference' ),
			'search_items'          => __( 'Search Guides', 'reference' ),
			'not_found'             => __( 'No Guides Found', 'reference' ),
			'not_found_in_trash'    => __( 'No Guides Found in Trash', 'reference' ),
			'parent_item_colon'     => __( 'Parent Guide', 'reference' ),
			'featured_image'        => __( 'Featured image for this guide', 'reference' ),
			'set_featured_image'    => __( 'Set featured image for this guide', 'reference' ),
			'remove_featured_image' => __( 'Remove featured image for this guide', 'reference' ),
			'use_featured_image'    => __( 'Use as featured image for this guide', 'reference' ),
			'archives'              => __( 'Guide archives', 'reference' ),
			'insert_into_item'      => __( 'Insert into Guide', 'reference' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Guide', 'reference' ),
			'filter_items_list'     => __( 'Filter Guides', 'reference' ),
			'items_list_navigation' => __( 'Guides list navigation', 'reference' ),
			'items_list'            => __( 'Guides List', 'reference' ),
			'attributes'            => __( 'Guide Attributes', 'reference' ),
			'parent_item_colon'     => __( 'Parent Guide', 'reference' ),
		];

		// Apply a filter to labels for customization.
		$labels = apply_filters( 'abref_guides_labels', $labels );

		$options = [
			'label'               => __( 'Guides', 'reference' ),
			'labels'              => $labels,
			'description'         => __( 'Custom post type description.', 'reference' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => 'abref_guides_rest_api',
			'has_archive'         => true,
			'show_in_menu'        => true,
			'exclude_from_search' => false,
			// Sets user role levels, accepts array: 'capabilities'        => [],
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'rewrite'             => [
				'slug'       => 'guides',
				'with_front' => true
			],
			'query_var'           => 'abref_guides',
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-welcome-learn-more',
			'supports'            => [
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'trackbacks',
				'custom-fields',
				'comments',
				'revisions',
				'author',
				'page-attributes',
				'post-formats'
			],
			'taxonomies'          => [
				'category',
				'post_tag',
				'' // Change to your custom taxonomy name.
			],
		];

		// Apply a filter to arguments for customization.
		$options = apply_filters( 'abref_guides_args', $options );

		/**
		 * Register the post type
		 *
		 * Maximum 20 characters, cannot contain capital letters or spaces.
		 */
		register_post_type(
			'guides',
			$options
		);

	}

}

$abref_post_types = new Post_Types;