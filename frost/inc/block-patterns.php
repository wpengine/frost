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
		'frost-call-to-action' => array(
			'label' => __( 'Call-to-Action', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-featured-boxes' => array(
			'label' => __( 'Featured Boxes', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-footer' => array(
			'label' => __( 'Footer', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-header' => array(
			'label' => __( 'Header', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-hero-section' => array(
			'label' => __( 'Hero Section', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-link-page' => array(
			'label' => __( 'Link Page', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-podcast-episode' => array(
			'label' => __( 'Podcast Episode', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-portfolio' => array(
			'label' => __( 'Portfolio', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-pricing-table' => array(
			'label' => __( 'Pricing Table', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-team-members' => array(
			'label' => __( 'Team Members', 'frost' ),
			'categoryTypes' => array( 'frost' ),
		),
		'frost-testimonials' => array(
			'label' => __( 'Testimonials', 'frost' ),
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
		'call-to-action/call-to-action-button',
		'call-to-action/call-to-action-button-black-background',
		'call-to-action/call-to-action-buttons',
		'call-to-action/call-to-action-buttons-black-background',
		'call-to-action/call-to-action-stacked',
		'call-to-action/call-to-action-stacked-black-background',
		'featured-boxes/featured-boxes-two',
		'featured-boxes/featured-boxes-two-black-background',
		'featured-boxes/featured-boxes-three',
		'featured-boxes/featured-boxes-three-black-background',
		'footer/footer-default',
		'footer/footer-default-black-background',
		'footer/footer-mega',
		'footer/footer-mega-black-background',
		'footer/footer-stacked',
		'footer/footer-stacked-black-background',
		'footer/footer-three-columns',
		'footer/footer-three-columns-black-background',
		'header/header-default',
		'header/header-default-black-background',
		'hidden/hidden-404',
		'hero-section/hero-section-one-column',
		'hero-section/hero-section-one-column-black-background',
		'hero-section/hero-section-two-columns',
		'hero-section/hero-section-two-columns-black-background',
		'link-page/link-page',
		'link-page/link-page-black-background',
		'podcast-episode/podcast-episode',
		'podcast-episode/podcast-episode-black-background',
		'portfolio/portfolio',
		'portfolio/portfolio-black-background',
		'pricing-table/pricing-table-two-columns',
		'pricing-table/pricing-table-two-columns-black-background',
		'pricing-table/pricing-table-three-columns',
		'pricing-table/pricing-table-three-columns-black-background',
		'pricing-table/pricing-table-four-columns',
		'pricing-table/pricing-table-four-columns-black-background',
		'team-members/team-members-two-columns',
		'team-members/team-members-two-columns-black-background',
		'team-members/team-members-four-columns',
		'team-members/team-members-four-columns-black-background',
		'testimonials/testimonials',
		'testimonials/testimonials-black-background',
		'testimonials/testimonials-boxes',
		'testimonials/testimonials-boxes-black-background',
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
