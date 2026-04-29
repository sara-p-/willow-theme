<?php

// Various settings to customize the WP Store Locator plugin

// Custom Marker Icons
function custom_admin_marker_dir() {
  
  $admin_marker_dir = get_stylesheet_directory() . '/assets/wpsl-markers/';
  
  return $admin_marker_dir;
}
add_filter( 'wpsl_admin_marker_dir', 'custom_admin_marker_dir' );


define( 'WPSL_MARKER_URI', dirname( get_bloginfo( 'stylesheet_url') ) . '/assets/wpsl-markers/' );


// Change the marker size
function custom_marker_props( $marker_props ) {
  
  $marker_props['scaledSize'] = '48,70'; // Set this to 50% of the original size
  $marker_props['origin'] = '0,0';
  $marker_props['anchor'] = '24,70';
  
  return $marker_props;
}
add_filter( 'wpsl_marker_props', 'custom_marker_props' );