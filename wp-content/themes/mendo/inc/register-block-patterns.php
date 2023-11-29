<?php
/**
 * Block patterns
 *
 * @package mendo
 * @since 1.0.0
 */

/**
 * Remove all core block patterns.
 * 
 * @since 1.0.0
 * 
 * @return void
 */
add_action('init', function() {
	remove_theme_support( 'core-block-patterns' );
});

/**
 * This is an example of how to unregister a core block pattern and a block pattern category.
 * Must be called after the patterns and pattern categories that you want to unregister have been added.
 *
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern/
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern_category/
 *
 * @since 1.0.0
 *
 * @return void
 */
function mendo_unregister_patterns() {

	$core_patterns = array(
		'core/social-links-shared-background-color',
		'core/query-grid-posts',
		'core/query-large-title-posts',
		'core/query-medium-posts',
		'core/query-offset-posts',
		'core/query-small-posts',
		'core/query-standard-posts',
	);
	foreach ( $core_patterns as $pattern ) {
		unregister_block_pattern( $pattern );
	}

}
add_action( 'init', 'mendo_unregister_patterns', 10 );
