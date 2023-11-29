<?php
/**
 * Block styles.
 *
 * @package mendo
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function mendo_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-template',
		array(
			'name'  => 'mendo-counter',
			'label' => __( 'With counter', 'mendo' ),		
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'mendo-large-gap',
			'label' => __( 'Large gap', 'mendo' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'mendo-extra-large-gap',
			'label' => __( 'X Large gap', 'mendo' ),
		)
	);

}
add_action( 'init', 'mendo_register_block_styles' );