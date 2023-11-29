<?php

// Theme Support

if ( ! function_exists( 'keily_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @return void
     */
    function keily_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1568, 9999 );
        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );
        // Add support for editor styles.
        add_theme_support( 'editor-styles' );
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
        // Add support for experimental link color control.
        add_theme_support( 'experimental-link-color' );
        // Add support for custom units.
        add_theme_support( 'custom-units' );

	    add_editor_style( 'style.css' );
    }
}
add_action( 'after_setup_theme', 'keily_setup' );

/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function keily_styles() {

	wp_enqueue_style( 'keily-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'keily' )->get( 'Version' ) );

    // wp_enqueue_script('keily-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), wp_get_theme( 'keily' )->get( 'Version' ) );

    // // registering js for theme
    //     wp_enqueue_script('jquery');

}
add_action( 'wp_enqueue_scripts', 'keily_styles' );

/*	-----------------------------------------------------------------------------------------------
	BLOCK PATTERN CATEGORIES
	Register theme specific block pattern categories. The patterns themselves are stored in /patterns/.
--------------------------------------------------------------------------------------------------- */

function keily_register_block_patterns() {

	register_block_pattern_category( 'keily', array(
		'label'		=> esc_html__( 'Keily Patterns', 'keily' ),
	) );

}
add_action( 'init', 'keily_register_block_patterns' );


/**
 * Register block styles.
 *
 * @since 1.0.0
 */
function keily_register_block_styles()
{
    $block_styles = array(
        'core/button' => array(
            'no-outline'        => esc_html__('No Outline', 'keily'),
            'drop-shadow'      => esc_html__('Drop Shadow', 'keily'),
            'rounded-drop-shadow'        => esc_html__('Rounded Drop Shadow', 'keily'),
            'rounded'            => esc_html__('Rounded', 'keily'),
        ),
    ); 


    $block_styles = array(
        'core/list' => array(
            'list-style-none'        => esc_html__('No List Style', 'keily'),
            'list-style-check'        => esc_html__('Check List Style', 'keily'),
            'list-style-arrow'        => esc_html__('Arrow List Style', 'keily'),
            'list-no-style-center'        => esc_html__('Center, No Style', 'keily'),
            'list-style-featured'        => esc_html__('Featured List Style', 'keily'),
        ),
    );

    $block_styles = array(
        'core/post-terms' => array(
            'post-terms-pill'        => __( 'Pill', 'keily' ),
            // 'inline_style' => '
            //     .is-style-post-term-pill a{
            //         display: inline-block;
            //         font-size: var(--wp--preset--font-size--x-small);
            //         padding: 6px 12px;
            //         border-radius: var(--wp--custom--border-radius--full);
            //         color: var(--wp--preset--color--body);
            //         background-color: var(--wp--preset--color--outline);
            //         margin-top: var(--wp--preset--spacing--xxx-small);
            //         margin-bottom: var(--wp--preset--spacing--xxx-small);
            //         line-height: var(--wp--custom--line-height--initial);
            //     }
            // ',
        ),
    );

    foreach ($block_styles as $block => $styles) {
        foreach ($styles as $style_name => $style_label) {
            register_block_style(
                $block,
                array(
                    'name'  => $style_name,
                    'label' => $style_label,
                )
            );
        }
    }


}

add_action('init', 'keily_register_block_styles');

