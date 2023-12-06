<?php
/**
 * Slider Post Type
 */

class Slider_Post_Type {
    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'init', [$this, 'slider_custom_post_type'] );
    }

    public function slider_custom_post_type() {
        $labels = [
            'name'                  => _x( 'Sliders', 'Post Type General Name', 'wordpress-theme-task' ),
            'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'wordpress-theme-task' ),
            'menu_name'             => __( 'Slider', 'wordpress-theme-task' ),
            'name_admin_bar'        => __( 'Slider', 'wordpress-theme-task' ),
            'archives'              => __( 'Slider Archives', 'wordpress-theme-task' ),
            'attributes'            => __( 'Slider Attributes', 'wordpress-theme-task' ),
            'parent_item_colon'     => __( 'Parent Slider', 'wordpress-theme-task' ),
            'all_items'             => __( 'All Sliders', 'wordpress-theme-task' ),
            'add_new_item'          => __( 'Add New Slider', 'wordpress-theme-task' ),
            'add_new'               => __( 'Add New', 'wordpress-theme-task' ),
            'new_item'              => __( 'New Slider', 'wordpress-theme-task' ),
            'edit_item'             => __( 'Edit Slider', 'wordpress-theme-task' ),
            'update_item'           => __( 'Update Slider', 'wordpress-theme-task' ),
            'view_item'             => __( 'View Slider', 'wordpress-theme-task' ),
            'view_items'            => __( 'View Slider', 'wordpress-theme-task' ),
            'search_items'          => __( 'Search Slider', 'wordpress-theme-task' ),
            'not_found'             => __( 'Not found', 'wordpress-theme-task' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'wordpress-theme-task' ),
            'featured_image'        => __( 'Featured Image', 'wordpress-theme-task' ),
            'set_featured_image'    => __( 'Set featured image', 'wordpress-theme-task' ),
            'remove_featured_image' => __( 'Remove featured image', 'wordpress-theme-task' ),
            'use_featured_image'    => __( 'Use as featured image', 'wordpress-theme-task' ),
            'insert_into_item'      => __( 'Insert into Slider', 'wordpress-theme-task' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Slider', 'wordpress-theme-task' ),
            'items_list'            => __( 'Slider list', 'wordpress-theme-task' ),
            'items_list_navigation' => __( 'Slider list navigation', 'wordpress-theme-task' ),
            'filter_items_list'     => __( 'Filter Sliders list', 'wordpress-theme-task' ),
        ];
        $args = [
            'label'               => __( 'Slider', 'wordpress-theme-task' ),
            'description'         => __( 'Slider Post Type', 'wordpress-theme-task' ),
            'labels'              => $labels,
            'supports'            => [ 'title', 'editor', 'thumbnail' ],
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 25,
            'menu_icon'           => 'dashicons-slides',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        ];
        register_post_type( 'slider-post-type', $args );

    }
}