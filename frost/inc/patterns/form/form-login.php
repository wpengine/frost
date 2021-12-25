<?php
/**
 * Frost: Login form
 *
 * @package Frost
 */

return array(
	'title'      => __( 'Login form with input, button.', 'frost' ),
	'categories' => array( 'frost-form' ),
	'content'    => '<!-- wp:group {"align":"full","className":"is-style-full-height","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull is-style-full-height"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				
				<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"30px"}}}} -->
				<h1 class="has-text-align-center" id="login-form-1" style="margin-bottom:30px">Login Form</h1>
				<!-- /wp:heading -->
				
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"60px","bottom":"10px","left":"60px"}},"border":{"width":"1px","style":"solid"}},"borderColor":"black","backgroundColor":"white"} -->
				<div class="wp-block-group has-border-color has-black-border-color has-white-background-color has-background" style="border-style:solid;border-width:1px;padding-top:40px;padding-right:60px;padding-bottom:10px;padding-left:60px"><!-- wp:loginout {"displayLoginAsForm":true} /--></div>
				<!-- /wp:group -->
				
				<!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer --></div>
				<!-- /wp:group -->',
);
