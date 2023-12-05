<?php
/**
 * Navigation menu registration template
 */

class Register_Nav_Menu {
    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'init', [$this, 'register_nav_menu'] );
    }

    public function register_nav_menu() {
        // Register Nav Menu
        register_nav_menus( [
            'primary_menu' => esc_html__( 'Primary Menu', 'wordpress-theme-task' ),
            'footer_menu'  => esc_html__( 'Footer Menu', 'wordpress-theme-task' ),
        ] );
    }
}