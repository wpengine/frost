<?php
/**
 * Frost: Hero with media, text, button, black background
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Section with media, text, buttons.', 'frost' ),
	'categories' => array( 'frost-hero-section' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"black","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-black-background-color has-background"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:media-text {"mediaPosition":"right","mediaId":3484,"mediaLink":"https://frostwp.com/patterns/hero-section/sample-white_1200x1200/","mediaType":"image","mediaWidth":40} -->
				<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile" style="grid-template-columns:auto 40%"><figure class="wp-block-media-text__media"><img src="https://frostwp.com/wp-content/uploads/2021/12/sample-white_1200x1200-1024x1024.jpg" alt="Frost WordPress Theme" class="wp-image-3484 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"white","fontSize":"x-large"} -->
				<h2 class="has-white-color has-text-color has-x-large-font-size" id="text-on-left-image-on-right">Text on left, media on right.</h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph {"textColor":"white"} -->
				<p class="has-white-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque gravida vitae non diam accumsan posuere, venenatis mi turpis.</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill-white"} -->
				<div class="wp-block-button is-style-fill-white"><a class="wp-block-button__link no-border-radius">Get Started</a></div>
				<!-- /wp:button -->
				
				<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline-white"} -->
				<div class="wp-block-button is-style-outline-white"><a class="wp-block-button__link no-border-radius">Learn More</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div></div>
				<!-- /wp:media-text -->
				
				<!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
