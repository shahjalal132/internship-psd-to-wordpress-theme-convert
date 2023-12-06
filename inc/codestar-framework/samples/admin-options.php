<?php if ( !defined( 'ABSPATH' ) ) {die;} // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_wordpress-theme-task';

//
// Create options
//
CSF::createOptions( $prefix, [
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'theme-options',
] );

//
// Create a section
//
CSF::createSection( $prefix, [
    'title'  => 'Overview',
    'icon'   => 'fas fa-font',
    'fields' => [

        /**
         * Copyright text field
         */
        [
            'id'    => 'copyright',
            'type'  => 'text',
            'title' => 'Copyright text',
        ],

    ],
] );