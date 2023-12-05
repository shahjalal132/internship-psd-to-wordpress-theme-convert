<?php
/**
 * Enqueue Assets Template
 */

class Enqueue_Assets {
    public function __construct() {
        $this->setup_hooks();
    }

    public function enqueue_css() {
        // Register CSS
        
    }

    public function setup_hooks() {
        add_action( 'wp_enqueue_scripts', [$this, 'enqueue_css'] );
    }
}