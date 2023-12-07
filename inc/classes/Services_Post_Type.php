<?php
/**
 * Services Post Type
 */

class Services_Post_Type {
    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'init', [$this, 'services_post_type'] );
    }

    public function services_post_type() {
        $labels = [
            'name'                  => _x( 'Services', 'Post Type General Name', 'wordpress-theme-task' ),
            'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'wordpress-theme-task' ),
            'menu_name'             => __( 'Service', 'wordpress-theme-task' ),
            'name_admin_bar'        => __( 'Service', 'wordpress-theme-task' ),
            'archives'              => __( 'Service Archives', 'wordpress-theme-task' ),
            'attributes'            => __( 'Service Attributes', 'wordpress-theme-task' ),
            'parent_item_colon'     => __( 'Parent Service', 'wordpress-theme-task' ),
            'all_items'             => __( 'All Services', 'wordpress-theme-task' ),
            'add_new_item'          => __( 'Add New Service', 'wordpress-theme-task' ),
            'add_new'               => __( 'Add New', 'wordpress-theme-task' ),
            'new_item'              => __( 'New Service', 'wordpress-theme-task' ),
            'edit_item'             => __( 'Edit Service', 'wordpress-theme-task' ),
            'update_item'           => __( 'Update Service', 'wordpress-theme-task' ),
            'view_item'             => __( 'View Service', 'wordpress-theme-task' ),
            'view_items'            => __( 'View Service', 'wordpress-theme-task' ),
            'search_items'          => __( 'Search Service', 'wordpress-theme-task' ),
            'not_found'             => __( 'Not found', 'wordpress-theme-task' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'wordpress-theme-task' ),
            'featured_image'        => __( 'Featured Image', 'wordpress-theme-task' ),
            'set_featured_image'    => __( 'Set featured image', 'wordpress-theme-task' ),
            'remove_featured_image' => __( 'Remove featured image', 'wordpress-theme-task' ),
            'use_featured_image'    => __( 'Use as featured image', 'wordpress-theme-task' ),
            'insert_into_item'      => __( 'Insert into Service', 'wordpress-theme-task' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Service', 'wordpress-theme-task' ),
            'items_list'            => __( 'Service list', 'wordpress-theme-task' ),
            'items_list_navigation' => __( 'Services list navigation', 'wordpress-theme-task' ),
            'filter_items_list'     => __( 'Filter Services list', 'wordpress-theme-task' ),
        ];
        $args = [
            'label'               => __( 'Service', 'wordpress-theme-task' ),
            'description'         => __( 'our service', 'wordpress-theme-task' ),
            'labels'              => $labels,
            'supports'            => [ 'title', 'editor', 'thumbnail' ],
            'taxonomies'          => [ 'category', 'post_tag' ],
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 25,
            'menu_icon'           => 'dashicons-portfolio',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        ];
        register_post_type( 'service', $args );

    }
}