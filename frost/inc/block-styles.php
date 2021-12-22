<?php
/**
 * This file adds block styles to the Frost theme for WordPress.
 *
 * @package Frost
 * @author  WP Engine
 * @license GNU General Public License v2 or later
 * @link    https://frostwp.com/
 */

// Add button styles: Fill White, Outline White.
register_block_style(
	'core/button',
	array(
		'name'  => 'fill-white',
		'label' => __( 'Fill White', 'frost' ),
	)
);

register_block_style(
	'core/button',
	array(
		'name'  => 'outline-white',
		'label' => __( 'Outline White', 'frost' ),
	)
);

// Add group styles: Boxshadow.
register_block_style(
	'core/group',
	array(
		'name'  => 'boxshadow',
		'label' => __( 'Boxshadow', 'frost' ),
	)
);

// Add image styles: Margin.
register_block_style(
	'core/image',
	array(
		'name'  => 'no-margin',
		'label' => __( 'No Margin', 'frost' ),
	)
);

// Add navigation styles: Fill, Outline.
register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'fill',
		'label' => __( 'Fill', 'frost' ),
	)
);

register_block_style(
	'core/navigation-link',
	array(
		'name'  => 'outline',
		'label' => __( 'Outline', 'frost' ),
	)
);

// Add paragraph styles: Margin.
register_block_style(
	'core/paragraph',
	array(
		'name'  => 'no-margin',
		'label' => __( 'No Margin', 'frost' ),
	)
);
