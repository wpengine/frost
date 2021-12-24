<?php
/**
 * Frost: Header with site title, navigation
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Header with site title, navigation.', 'frost' ),
	'categories' => array( 'frost-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"30px","left":"40px"}}},"layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull" style="padding-top:30px;padding-right:40px;padding-bottom:30px;padding-left:40px">
				<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<div class="wp-block-group alignwide">
				<!-- wp:site-title /-->
				<!-- wp:navigation {"isResponsive":true} -->
				<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
				<!-- /wp:navigation -->
				</div>
				<!-- /wp:group -->
				</div>
				<!-- /wp:group -->',
);
