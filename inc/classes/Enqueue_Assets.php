<?php
/**
 * Enqueue Assets Template
 */

class Enqueue_Assets {
    public function __construct() {
        $this->setup_hooks();
    }

    public function enqueue_css() {
        //  Registering CSS
        wp_register_style( 'bootstrap', THEME_DIR_URI . '/assets/css/bootstrap.min.css', [], false, 'all' );
        wp_register_style( 'slick', THEME_DIR_URI . '/assets/css/slick.css', [], false, 'all' );
        wp_register_style( 'normalize', THEME_DIR_URI . '/assets/css/normalize.css', [], false, 'all' );
        wp_register_style( 'custom-style', THEME_DIR_URI . '/assets/css/style.css', [], filemtime( THEME_DIR_PATH . '/assets/css/style.css' ), 'all' );
        wp_register_style( 'responsive', THEME_DIR_URI . '/assets/css/responsive.css', [], filemtime( THEME_DIR_PATH . '/assets/css/responsive.css' ), 'all' );

        // Enqueue CSS
        wp_enqueue_style( 'bootstrap' );
        wp_enqueue_style( 'slick' );
        wp_enqueue_style( 'normalize' );
        wp_enqueue_style( 'custom-style' );
        wp_enqueue_style( 'responsive' );

        // Enqueue google fonts
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Roboto:wght@400;500;700&display=swap', [], false, 'all' );

        // HTML 5 shim enqueue
        wp_script_add_data( 'html5shim', 'conditional', 'lt ie 9' );
    }

    public function enqueue_js() {
        // Registering JS
        wp_register_script( 'slick', THEME_DIR_URI . '/assets/js/slick.js', ['jquery'], false, true );
        wp_register_script( 'bootstrap', THEME_DIR_URI . '/assets/js/bootstrap.bundle.js', ['jquery'], false, true );
        wp_register_script( 'modernizr', THEME_DIR_URI . '/assets/js/modernizr.min.js', ['jquery'], false, true );
        wp_register_script( 'mixitup', THEME_DIR_URI . '/assets/js/mixitup.min.js', ['jquery'], false, true );
        wp_register_script( 'custom-js', THEME_DIR_URI . '/assets/js/custom.js', ['jquery', 'bootstrap', 'slick', 'mixitup'], false, true );

        // Enqueue JS
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'slick' );
        wp_enqueue_script( 'bootstrap' );
        wp_enqueue_script( 'modernizr' );
        wp_enqueue_script( 'mixitup' );
        wp_enqueue_script( 'custom-js' );

    }

    public function enqueue_assets_to_backend() {
        // Register JS file
        wp_register_script( "admin-custom-js", THEME_DIR_URI . "/assets/js/admin-scripts/dynamic-metafield.js", ['jquery'], false, true );
        wp_register_script( "jquery-backend", THEME_DIR_URI . "/assets/js/admin-scripts/jquery.js", [], false, true );

        // Enqueue JS
        wp_enqueue_script( "jquery-backend" );
        wp_enqueue_script( 'admin-custom-js' );
    }

    public function setup_hooks() {
        add_action( 'wp_enqueue_scripts', [$this, 'enqueue_css'] );
        add_action( 'wp_enqueue_scripts', [$this, 'enqueue_js'] );
        add_action( 'admin_enqueue_scripts', [$this, 'enqueue_assets_to_backend'] );
    }
}