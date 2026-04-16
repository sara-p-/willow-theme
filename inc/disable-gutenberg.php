<?php

// Disabling the Block Editor *only* on Testimonials
function disable_gutenberg_for_testimonials($is_enabled, $post_type) {
  if ($post_type === 'testimonials') {
    return false; // Disable Gutenberg
  }
  return $is_enabled; // Keep Gutenberg for others
}
add_filter('use_block_editor_for_post_type', 'disable_gutenberg_for_testimonials', 10, 2);