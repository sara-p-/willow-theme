<?php

// Includes
require_once 'inc/post-types.php';
require_once 'inc/disable-comments.php';
// require_once 'inc/disable-gutenberg.php';



// Remove WP Block Patterns
// add_filter( 'should_load_remote_block_patterns', '__return_false' );


function prefix_remove_core_patterns() {
    remove_theme_support( 'core-block-patterns' );
}
// add_action( 'after_setup_theme', 'prefix_remove_core_patterns' );

// Removing Block Plugin Directory thing
// remove_action('enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets');

// Removing OpenVerse Media Library
add_filter( 'block_editor_settings_all', function( $settings ) {
    $settings['enableOpenverseMediaCategory'] = false;
    return $settings;
}, 10 );


// Control the block types available in the Inserter
function willow_allowed_block_types($allowed_block_types, $editor_context) {
  // Replace with your own allow or deny list
  return willow_deny_list_blocks();
}

add_filter('allowed_block_types_all', 'willow_allowed_block_types', 10, 2);

// function that dictates the blocks that you don't want
function willow_deny_list_blocks() {
  // Get all the blocks
  $blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();

  // List the blocks you don't want
  unset($blocks['core/archives']);
  // unset($blocks['core/gallery']);

  return array_keys($blocks);
}