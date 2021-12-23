<?php
/**
 * Frost: Hero section with image, text, button
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Hero section with image, text, buttons.', 'frost' ),
	'categories' => array( 'frost-hero-section' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"white","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-white-background-color has-background"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"x-large"} -->
				<h2 class="has-x-large-font-size" id="text-on-left-image-on-right">Text on left, image on right.</h2>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque vitae gravida non diam accumsan posuere, venenatis at mi turpis.</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"style":{"border":{"radius":0}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">Get Started</a></div>
				<!-- /wp:button -->
				
				<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">Learn More</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"width":""} -->
				<div class="wp-block-column"><!-- wp:image {"id":3485,"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="https://frostwp.com/wp-content/uploads/2021/12/sample-black_1200x1200-1024x1024.jpg" alt="Frost WordPress Theme" class="wp-image-3485"/></figure>
				<!-- /wp:image --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
				
				<!-- wp:spacer {"height":40} -->
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
