<?php
/**
 * Frost: Footer with site title, site-tagline, navigation
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Footer with site title, site-tagline, navigation.', 'frost' ),
	'categories' => array( 'frost-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"10px","left":"40px"}}},"backgroundColor":"black","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-black-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:10px;padding-left:40px"><!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"small"} -->
				<p class="has-white-color has-text-color has-link-color has-small-font-size">© 2021 Your Company LLC · Powered by <a href="https://frostwp.com/">Frost</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"small"} -->
				<p class="has-text-align-right has-white-color has-text-color has-link-color has-small-font-size"><a href="#">Facebook</a> · <a href="#">Twitter</a> · <a href="#">Instagram</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div>
				<!-- /wp:group -->',
);
