<?php
/**
 * Auto Loader Template
 *
 * @package oop
 */

function autoloader( $className ) {
    // Base Directory Path
    $baseDir = __DIR__ . '/../classes/';

    // Convert directory path to file path
    $filePath = $baseDir . str_replace( '\\', '/', $className ) . '.php';

    // check if file exists then require the file
    if ( file_exists( $filePath ) ) {
        require_once $filePath;
    }
}

// Register this autoload function
spl_autoload_register( 'autoloader' );

// Loading Classes
$themeSupport    = new Theme_Support();
$enqueueAssets   = new Enqueue_Assets();
$registerNavMenu = new Register_Nav_Menu();
$sliderPostType  = new Slider_Post_Type();
$customMetabox   = new Custom_Metabox();