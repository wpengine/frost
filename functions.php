<?php
/**
 * This file adds functions to the Frost WordPress theme.
 *
 * @package Frost
 * @author  WP Engine
 * @license GNU General Public License v2 or later
 * @link    https://frostwp.com/
 */

if ( ! function_exists( 'frost_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function frost_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'frost', get_template_directory() . '/languages' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'frost_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'frost_enqueue_style_sheet' );
function frost_enqueue_style_sheet() {

	wp_enqueue_style( 'frost', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

/**
 * Register block styles.
 *
 * @since 0.9.2
 */
function frost_register_block_styles() {

	$block_styles = array(
		'core/button'          => array(
			'fill-base'    => __( 'Fill Base', 'frost' ),
			'outline-base' => __( 'Outline Base', 'frost' ),
		),
		'core/group'           => array(
			'full-height'  => __( 'Full-height', 'frost' ),
			'shadow'       => __( 'Shadow', 'frost' ),
			'shadow-solid' => __( 'Shadow Solid', 'frost' ),
		),
		'core/list'            => array(
			'no-disc' => __( 'No Disc', 'frost' ),
		),
		'core/navigation-link' => array(
			'outline' => __( 'Outline', 'frost' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
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
add_action( 'init', 'frost_register_block_styles' );

/**
 * Registers block categories, and type.
 *
 * @since 0.9.2
 */
function frost_register_block_pattern_categories() {

	/* Functionality specific to the Block Pattern Explorer plugin. */
	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'frost', array( 'label' => __( 'Frost', 'frost' ) ) );
	}

	$block_pattern_categories = array(
		'frost-footer'  => array(
			'label'         => __( 'Footer', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-general' => array(
			'label'         => __( 'General', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-header'  => array(
			'label'         => __( 'Header', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-page'    => array(
			'label'         => __( 'Page', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-query'   => array(
			'label'         => __( 'Query', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'frost_register_block_pattern_categories', 9 );
