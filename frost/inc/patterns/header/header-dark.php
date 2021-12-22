<?php
/**
 * Frost: Dark header with site title, navigation
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Header with site title, navigation.', 'frost' ),
	'categories' => array( 'frost-header' ),
	'blockTypes' => array( 'core/template-part/header-dark' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"black","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-black-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">
				<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<div class="wp-block-group alignwide">
				<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} /-->
				<!-- wp:navigation {"textColor":"white","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
				<!-- wp:page-list /-->
				<!-- /wp:navigation -->
				</div>
				<!-- /wp:group -->
				</div>
				<!-- /wp:group -->',
);
