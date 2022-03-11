<?php
/**
 * Frost: Block Patterns
 *
 * @since Frost 0.8.0
 */

/**
 * Registers block patterns, categories, and type.
 *
 * @since Frost 0.8.0
 */
function frost_register_block_patterns() {

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

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Frost 0.8.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'frost_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
		'footer/footer-default',
		'footer/footer-default-black-background',
		'footer/footer-mega',
		'footer/footer-mega-black-background',
		'footer/footer-split',
		'footer/footer-split-black-background',
		'footer/footer-stacked',
		'footer/footer-stacked-black-background',
		'footer/footer-three-columns',
		'footer/footer-three-columns-black-background',
		'general/general-boxes-two',
		'general/general-boxes-two-black-background',
		'general/general-boxes-two-gradient',
		'general/general-boxes-two-gradient-black-background',
		'general/general-boxes-three',
		'general/general-boxes-three-black-background',
		'general/general-cta-button',
		'general/general-cta-button-black-background',
		'general/general-cta-button-boxed',
		'general/general-cta-button-boxed-black-background',
		'general/general-cta-buttons',
		'general/general-cta-buttons-black-background',
		'general/general-cta-stacked',
		'general/general-cta-stacked-black-background',
		'general/general-hero-one-column',
		'general/general-hero-one-column-black-background',
		'general/general-hero-three-columns',
		'general/general-hero-three-columns-black-background',
		'general/general-hero-two-columns',
		'general/general-hero-two-columns-black-background',
		'general/general-podcast',
		'general/general-podcast-black-background',
		'general/general-portfolio',
		'general/general-portfolio-black-background',
		'general/general-pricing-two-columns',
		'general/general-pricing-two-columns-black-background',
		'general/general-pricing-three-columns',
		'general/general-pricing-three-columns-black-background',
		'general/general-pricing-four-columns',
		'general/general-pricing-four-columns-black-background',
		'general/general-team-two-columns',
		'general/general-team-two-columns-black-background',
		'general/general-team-four-columns',
		'general/general-team-four-columns-black-background',
		'general/general-testimonials',
		'general/general-testimonials-black-background',
		'general/general-testimonials-boxes',
		'general/general-testimonials-boxes-black-background',
		'header/header-default',
		'header/header-default-black-background',
		'hidden/hidden-404',
		'page/page-home',
		'page/page-link',
		'page/page-link-black-background',
		'page/page-split-cover-text',
		'page/page-split-text-cover',
		'query/query-default',
		'query/query-grid',
		'query/query-list',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Frost 0.8.0
	 *
	 * @param $block_patterns array List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'frost_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'frost/' . $block_pattern,
			require get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' )
		);
	}

}
add_action( 'init', 'frost_register_block_patterns', 9 );
