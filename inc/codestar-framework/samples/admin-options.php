<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_jalal-theme-options';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Theme Options',
  'menu_slug'  => 'theme-options',
) );

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => 'Logo',
  'icon'   => 'fas fa-image',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'logo',
      'type'  => 'media',
      'title' => 'Logo',
    ),
  )
) );

CSF::createSection( $prefix, array(
  'title'  => 'Copyright',
  'icon'   => 'fas fa-font',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'copyright',
      'type'  => 'text',
      'title' => 'Copyright text',
    ),
  )
) );

// get options
$options = get_option( $prefix );
