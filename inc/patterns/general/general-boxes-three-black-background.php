<?php
/**
 * Frost: Featured boxes with text, button, black background
 *
 * @package Frost
 */

return array(
	'title'         => __( 'Featured boxes with text, button.', 'frost' ),
	'categories'    => array( 'frost-general' ),
	'viewportWidth' => 1280,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"backgroundColor":"black","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-black-background-color has-background" style="margin-top:0px"><!-- wp:spacer {"height":100} -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"white"} -->
				<div class="wp-block-column has-white-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:heading {"level":3} -->
				<h3 id="sample-heading-1">' . esc_html__( 'Sample Heading', 'frost' ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
				<p style="font-size:18px">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Learn More', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column -->

				<!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"white"} -->
				<div class="wp-block-column has-white-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:heading {"level":3} -->
				<h3 id="sample-heading-2">' . esc_html__( 'Sample Heading', 'frost' ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
				<p style="font-size:18px">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Learn More', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column -->

				<!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"white"} -->
				<div class="wp-block-column has-white-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:heading {"level":3} -->
				<h3 id="sample-heading-3">' . esc_html__( 'Sample Heading', 'frost' ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
				<p style="font-size:18px">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus pellentesque.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Learn More', 'frost' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->

				<!-- wp:spacer {"height":100} -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
