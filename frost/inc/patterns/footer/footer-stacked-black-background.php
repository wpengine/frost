<?php
/**
 * Frost: Footer with heading, text, button, black background
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Footer with heading, text, button.', 'frost' ),
	'categories' => array( 'frost-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"black","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-black-background-color has-background"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":48,"lineHeight":"1.25"}},"textColor":"white","className":"is-uppercase"} -->
				<p class="has-text-align-center is-uppercase has-white-color has-text-color" style="font-size:48px;line-height:1.25">Let’s Connect</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:paragraph {"align":"center","textColor":"white"} -->
				<p class="has-text-align-center has-white-color has-text-color">Quisque aliquam nisl quis metus taylor feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum vitae gravida non diam accumsan.</p>
				<!-- /wp:paragraph -->
				
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline-white"} -->
				<div class="wp-block-button is-style-outline-white"><a class="wp-block-button__link no-border-radius" href="#">Get in Touch →</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
				
				<!-- wp:spacer {"height":70} -->
				<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"small"} -->
				<p class="has-text-align-center has-white-color has-text-color has-link-color has-small-font-size">© 2022 Your Company LLC · <a href="#">Contact Us</a></p>
				<!-- /wp:paragraph -->
				
				<!-- wp:spacer {"height":30} -->
				<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
