<?php
/**
 * Main Function template
 */

// Define theme directory path
if ( ! defined( 'THEME_DIR_PATH' ) ) {
    define( 'THEME_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

// Define theme directory uri
if ( ! defined( 'THEME_DIR_URI' ) ) {
    define( 'THEME_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

// Include Auto loader file
if ( file_exists( __DIR__ ) . '/inc/healper/Autoloader.php' ) {
    require_once __DIR__ . '/inc/healper/Autoloader.php';
}

// Include codestar framework
if ( file_exists( __DIR__ ) . '/inc/codestar-framework/codestar-framework.php' ) {
require_once __DIR__ . '/inc/codestar-framework/codestar-framework.php';
}