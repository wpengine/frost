<?php
/**
 * Frost: Footer with text, links, black background
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Footer with text, links.', 'frost' ),
	'categories' => array( 'frost-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"black","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-black-background-color has-background"><!-- wp:spacer {"height":40} -->
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"is-style-no-margin","fontSize":"small"} -->
				<p class="has-text-align-left is-style-no-margin has-white-color has-text-color has-link-color has-small-font-size">© 2022 Your Company LLC · <a href="#">Contact Us</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"is-style-no-margin","fontSize":"small"} -->
				<p class="has-text-align-right is-style-no-margin has-white-color has-text-color has-link-color has-small-font-size"><a href="#">Facebook</a>&nbsp;·&nbsp;<a href="#">Twitter</a>&nbsp;·&nbsp;<a href="#">Instagram</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
				
				<!-- wp:spacer {"height":10} -->
				<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
