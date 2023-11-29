<?php
/**
 * Filters
 *
 * @package mendo
 * @since 1.0.0
 */

/**
 * Show '(No title)' if a post has no title.
 *
 * @since 1.0.0
 */
add_filter(
	'the_title',
	function( $title ) {
		if ( ! is_admin() && empty( $title ) ) {
			$title = _x( '(No title)', 'Used if post or pages has no title', 'mendo' );
		}

		return $title;
	}
);

/**
 * Replace the default [...] excerpt more with an elipsis.
 *
 * @since 1.0.0
*/
add_filter(
	'excerpt_more',
	function( $more ) {
		return '&hellip;';
	}
);

/**
 * Change excerpt length.
 */
add_filter(
	'excerpt_length',
	function( $length ) {
		if ( is_admin() ) {
			return $length;
		}
		return 24;
	}
);

/**
 * Filter blocks to display only on home page
 */
add_filter( 'render_block',
	function( $block_content, $block ) {
		if ( is_admin() ) {
			return $block_content;
		}

		//check if block has a class defined
		if ( ! isset( $block['attrs']['className'] ) ) {
			return $block_content;
		}

		//check if block has home-display-only class is not on home page
		if ( strpos( $block['attrs']['className'], 'home-display-only' ) !== false && is_paged() ) {
			return '';
		}

		return $block_content;
	},
	10,
	2
);

/**
 * Demo import
 */
function mendo_demos_list(){
	$demo_lists = array(
	   'main' =>array(
			'title' => __( 'Blog', 'mendo' ),
			'is_pro' => false,
			'template_url' => array(
				'content' => 'https://solicowp.com/demo-content/mendo-main-content.json',
			),
		  	'screenshot_url' => 'https://solicowp.com/demo-content/mendo-main-content.jpg',
		  	'demo_url' => 'https://demo.solicowp.com/mendo',
	   ),
	   'travel' =>array(
			'title' => __( 'Travel', 'mendo' ),
			'is_pro' => true,
			'template_url' => array(
				'content' => 'https://solicowp.com/demo-content/mendo-travel-content.json',
			),
		  	'screenshot_url' => 'https://solicowp.com/demo-content/mendo-travel-content.jpg',
		  	'demo_url' => 'https://demo.solicowp.com/mendo-travel',
	   ),	
	   'fashion' =>array(
			'title' => __( 'Fashion', 'mendo' ),
			'is_pro' => true,
			'template_url' => array(
				'content' => 'https://solicowp.com/demo-content/mendo-fashion-content.json',
			),
		  	'screenshot_url' => 'https://solicowp.com/demo-content/mendo-fashion-content.jpg',
		  	'demo_url' => 'https://demo.solicowp.com/mendo-fashion',
	   ),	      
	);
	return $demo_lists;
}
add_filter('advanced_import_demo_lists', 'mendo_demos_list');