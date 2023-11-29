<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mendo
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'MENDO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function mendo_setup() {
	add_editor_style( './assets/css/style-shared.min.css' );

	/*
	 * Load additional block styles.
	 */
	$styled_blocks = [ 'button', 'latest-comments', 'latest-posts', 'quote', 'separator' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "mendo-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);

		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'mendo_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function mendo_styles() {
	wp_enqueue_style(
		'mendo-style',
		get_stylesheet_uri(),
		[],
		MENDO_VERSION
	);

	wp_enqueue_style(
		'mendo-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		MENDO_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'mendo_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block style.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );

// Theme dashboard
require_once get_theme_file_path( 'inc/dashboard/theme-dashboard.php' );
require_once get_theme_file_path( 'inc/dashboard/plugin-install.php' );

// Theme review notice.
require get_template_directory() . '/inc/class-mendo-review-notice.php';