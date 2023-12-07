<?php
/**
 * Pricing Post Type
 */

class Pricing_Post_Type {
    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'init', [$this, 'price_post_type'] );
    }

    public function price_post_type() {
        $labels = [
            'name'                  => _x( 'Prices', 'Post Type General Name', 'wordpress-theme-task' ),
            'singular_name'         => _x( 'Prices', 'Post Type Singular Name', 'wordpress-theme-task' ),
            'menu_name'             => __( 'Prices', 'wordpress-theme-task' ),
            'name_admin_bar'        => __( 'Price', 'wordpress-theme-task' ),
            'archives'              => __( 'Price Archives', 'wordpress-theme-task' ),
            'attributes'            => __( 'Price Attributes', 'wordpress-theme-task' ),
            'parent_item_colon'     => __( 'Parent Price', 'wordpress-theme-task' ),
            'all_items'             => __( 'All Price', 'wordpress-theme-task' ),
            'add_new_item'          => __( 'Add New Price', 'wordpress-theme-task' ),
            'add_new'               => __( 'Add New', 'wordpress-theme-task' ),
            'new_item'              => __( 'New Price', 'wordpress-theme-task' ),
            'edit_item'             => __( 'Edit Price', 'wordpress-theme-task' ),
            'update_item'           => __( 'Update Price', 'wordpress-theme-task' ),
            'view_item'             => __( 'View Price', 'wordpress-theme-task' ),
            'view_items'            => __( 'View Price', 'wordpress-theme-task' ),
            'search_items'          => __( 'Search Price', 'wordpress-theme-task' ),
            'not_found'             => __( 'Not found', 'wordpress-theme-task' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'wordpress-theme-task' ),
            'featured_image'        => __( 'Featured Image', 'wordpress-theme-task' ),
            'set_featured_image'    => __( 'Set featured image', 'wordpress-theme-task' ),
            'remove_featured_image' => __( 'Remove featured image', 'wordpress-theme-task' ),
            'use_featured_image'    => __( 'Use as featured image', 'wordpress-theme-task' ),
            'insert_into_item'      => __( 'Insert into Price', 'wordpress-theme-task' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Price', 'wordpress-theme-task' ),
            'items_list'            => __( 'Prices list', 'wordpress-theme-task' ),
            'items_list_navigation' => __( 'Prices list navigation', 'wordpress-theme-task' ),
            'filter_items_list'     => __( 'Filter Prices list', 'wordpress-theme-task' ),
        ];
        $args = [
            'label'               => __( 'Prices', 'wordpress-theme-task' ),
            'description'         => __( 'our Prices', 'wordpress-theme-task' ),
            'labels'              => $labels,
            'supports'            => ['title', 'editor', 'thumbnail'],
            'taxonomies'          => ['category', 'post_tag'],
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 26,
            'menu_icon'           => 'dashicons-cart',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        ];
        register_post_type( 'pricing', $args );

    }
}