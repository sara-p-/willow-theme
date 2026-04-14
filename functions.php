<?php

// Remove WP Block Patterns
add_filter( 'should_load_remote_block_patterns', '__return_false' );


function prefix_remove_core_patterns() {
    remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'prefix_remove_core_patterns' );