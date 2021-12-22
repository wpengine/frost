<?php
/**
 * Frost: Featured boxes with text, button, black background
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Featured boxes with text, button.', 'frost' ),
	'categories' => array( 'frost-featured-boxes' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"black","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-black-background-color has-background"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"style":{"spacing":{"padding":{"top":"60px","right":"60px","bottom":"60px","left":"60px"}}},"backgroundColor":"white"} -->
				<div class="wp-block-column has-white-background-color has-background" style="padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="has-large-font-size" id="sample-heading">Sample Heading</h3>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque vitae gravida non diam accumsan posuere, venenatis at mi turpis.</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"style":{"border":{"radius":0}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">Learn More</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"style":{"spacing":{"padding":{"top":"60px","right":"60px","bottom":"60px","left":"60px"}}},"backgroundColor":"white"} -->
				<div class="wp-block-column has-white-background-color has-background" style="padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px"><!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="has-large-font-size" id="sample-heading">Sample Heading</h3>
				<!-- /wp:heading -->
				
				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque vitae gravida non diam accumsan posuere, venenatis at mi turpis.</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"style":{"border":{"radius":0}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">Learn More</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
				
				<!-- wp:spacer {"height":70} -->
				<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
