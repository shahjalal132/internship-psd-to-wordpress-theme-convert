<?php
/**
 * Theme Support Template
 */

class Theme_Support {
    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'after_setup_theme', [$this, 'theme_support'] );
    }

    public function theme_support() {
        /**
         * Theme Support
         */
        add_theme_support( 'title-tag' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Load theme text domain
         */
        load_theme_textdomain( 'wordpress-theme-task', THEME_DIR_PATH .
            '/assets/lang' );

        /**
         * Custom Logo Support
         */

        add_theme_support( 'custom-logo', [
            'header-text' => ['site title', 'site description'],
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ] );

        /**
         * Support HTML format
         */

        add_theme_support( 'html5', [
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script',
        ] );

        /**
         * Support Custom background
         */

        add_theme_support( 'custom-background', [
            'default-image'  => '',
            'default-color'  => '#ffffff',
            'default-repeat' => 'no-repeat',
        ] );

    }
}