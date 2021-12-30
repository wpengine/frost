<?php
/**
 * Frost: Footer with text, links, buttons
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Footer with text, links, buttons.', 'frost' ),
	'categories' => array( 'frost-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull"><!-- wp:spacer {"height":40} -->
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"left","className":"is-style-no-margin","fontSize":"small"} -->
				<p class="has-text-align-left is-style-no-margin has-small-font-size">© 2022 Your Company LLC</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","className":"is-style-no-margin","fontSize":"small"} -->
				<p class="has-text-align-center is-style-no-margin has-small-font-size"><a href="#">Privacy Policy</a> · <a href="#">Terms of Service</a> · <a href="#">Contact Us</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				
				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"iconBackgroundColor":"black","iconBackgroundColorValue":"#000","align":"right","className":"is-style-default","layout":{"type":"flex","justifyContent":"right"}} -->
				<ul class="wp-block-social-links alignright has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
				
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				
				<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
				<!-- /wp:social-links --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
				
				<!-- wp:spacer {"height":10} -->
				<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
