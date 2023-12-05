<?php
/**
 * Theme Support Template
 *
 * @package oop
 */

class Theme_Support {
    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'after_setup_theme', [$this, 'theme_support'] );
    }

    public function theme_support() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
    }
}